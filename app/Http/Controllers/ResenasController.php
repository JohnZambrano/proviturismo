<?php

namespace App\Http\Controllers;

use App\Models\Resena;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Spatie\Permission\Models\Permission;


class ResenasController extends Controller
{
    public static function middleware(): array{ 
        return [
            // Define role-based permissions
            new \Spatie\Permission\Middleware\RoleMiddleware('ver-reseña', ['only' => ['index']]),
            new \Spatie\Permission\Middleware\RoleMiddleware('crear-reseña', ['only' => ['create', 'store']]),
            new \Spatie\Permission\Middleware\RoleMiddleware('editar-reseña', ['only' => ['edit', 'update']]),
            new \Spatie\Permission\Middleware\RoleMiddleware('borrar-reseña', ['only' => ['destroy']])
        ];
   }
    public function index()
    {
        $resenas = Resena::with('user')->paginate(15); 
        return view('resenas.index', compact('resenas'));
    }

    public function show(Resena $resena) // Route model binding
    {
        return view('resenas.show', compact('resena'));
    }

    public function create()
    {
        $permission = Permission::get();
        return view('resenas.crear',  compact('permission'));
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'tipo' => 'required|in:servicio,lugar,actividad',
        'elemento_uid' => 'required|string|max:255',
        'origen' => 'required|in:senderismo,mirador,excursionismo,servicioComida,servicioHospedaje,servicioTransporte,actividadRecreativa',
        'puntaje' => 'required|integer|min:1|max:5', // Cambiado: Directo, sin 'comentario.'
        'texto_comentario' => 'required|string|max:2000', // Cambiado: Directo, sin 'comentario.'
        'fotos' => 'sometimes|array|max:5',
        'fotos.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    $fotosPaths = [];
    if ($request->hasFile('fotos')) {
        foreach ($request->file('fotos') as $foto) {
            $fotosPaths[] = $foto->store('resenas', 'public');
        }
    }

    Resena::create([
        'user_id' => Auth::id(),
        'tipo' => $validated['tipo'],
        'elemento_uid' => $validated['elemento_uid'],
        'origen' => $validated['origen'],
        'puntaje' => $validated['puntaje'], // Cambiado: Acceso directo
        'texto_comentario' => $validated['texto_comentario'], // Cambiado: Acceso directo
        'fotos' => $fotosPaths
    ]);

    return redirect()->route('resenas.index')->with('success', '¡Reseña creada!');
}
    public function edit(Resena $resena)
    {
        return view('resenas.editar', compact('resena'));
    }

    public function update(Request $request, Resena $resena)
{
    $validated = $request->validate([
        'tipo' => 'required|in:servicio,lugar,actividad',
        'elemento_uid' => 'required|string|max:255',
        'origen' => 'required|in:senderismo,mirador,excursionismo,servicioComida,servicioHospedaje,servicioTransporte,actividadRecreativa',
        'puntaje' => 'required|integer|min:1|max:5', // Cambiado: Directo, sin 'comentario.'
        'texto_comentario' => 'required|string|max:2000', // Cambiado: Directo, sin 'comentario.'
        'fotos' => 'sometimes|array|max:5',
        'fotos.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);


    $fotosPaths = $resena->fotos ?? []; // Mantener fotos existentes por defecto
    if ($request->hasFile('fotos')) {

        // Eliminar fotos antiguas (Opcional, si quieres reemplazar todas las fotos)
        if (!empty($resena->fotos)) {
            foreach ($resena->fotos as $foto) {
                Storage::delete($foto);
            }
        }

        $fotosPaths = []; // Limpiar para almacenar las nuevas fotos
        foreach ($request->file('fotos') as $foto) {
            $fotosPaths[] = $foto->store('resenas', 'public');
        }
    }


    $resena->update([
        'tipo' => $validated['tipo'],
        'elemento_uid' => $validated['elemento_uid'],
        'origen' => $validated['origen'],
        'puntaje' => $validated['puntaje'], // Cambiado: Acceso directo
        'texto_comentario' => $validated['texto_comentario'], // Cambiado: Acceso directo
        'fotos' => $fotosPaths // Usar las nuevas rutas de fotos (o las antiguas si no se subieron nuevas)
    ]);

    return redirect()->route('resenas.index')->with('success', '¡Reseña actualizada!'); // Redirigir al index para ver los cambios
}

    public function destroy(Resena $resena)
    {
        // Eliminar fotos asociadas
        foreach ($resena->fotos as $fotoPath){
            Storage::delete($fotoPath);
        }
        
        $resena->delete();
        return redirect()->route('resenas.index')->with('success', '¡Reseña eliminada!');
    }
}