<?php

namespace App\Http\Controllers;

use App\Models\Noticias; // Importa el modelo Noticias
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Spatie\Permission\Models\Permission;

class NoticiasController extends Controller
{
    public static function middleware(): array{ 
        return [
            // Define role-based permissions
            new \Spatie\Permission\Middleware\RoleMiddleware('ver-noticia', ['only' => ['index']]),
            new \Spatie\Permission\Middleware\RoleMiddleware('crear-noticia', ['only' => ['create', 'store']]),
            new \Spatie\Permission\Middleware\RoleMiddleware('editar-noticia', ['only' => ['edit', 'update']]),
            new \Spatie\Permission\Middleware\RoleMiddleware('borrar-noticia', ['only' => ['destroy']])
        ];
   }
    public function index()
    {
        $noticias = Noticias::paginate(12); // Pagina las publicaciones, ajusta el número según necesites
        return view('noticias.index', compact('noticias'));
    }

    public function show(Noticias $noticia) // Route model binding
    {
        return view('noticias.show', compact('noticia'));
    }

    public function create()
    {
        $permission = Permission::get();
        return view('noticias.crear',  compact('permission'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string|max:1000', // 10000 caracteres
            'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'descripcion.max' => 'La descripción excede el límite máximo de 1000 caracteres.', // Mensaje específico
            // Mensajes para otros campos...
            'titulo.max' => 'El título no debe superar los 255 caracteres.',
            'imagen.max' => 'La imagen no debe pesar más de 2 MB.',
        ]);

        $imagenPath = $request->file('imagen')->store('noticias', 'public');

        Noticias::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'imagen' => $imagenPath,
        ]);

        return redirect()->route('noticias.index')->with('success', 'Publicación de noticia creada!');
    }

    public function edit(Noticias $noticia)
    {
        return view('noticias.editar', compact('noticia'));
    }

    public function update(Request $request, Noticias $noticia)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string|max:1000', // 1000 caracteres
            'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'descripcion.max' => 'La descripción excede el límite máximo de 1000 caracteres.', // Mensaje específico
            // Mensajes para otros campos...
            'titulo.max' => 'El título no debe superar los 255 caracteres.',
            'imagen.max' => 'La imagen no debe pesar más de 2 MB.',
        ]);

        $data = [
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
        ];

        if ($request->hasFile('imagen')) {
            Storage::disk('public')->delete($noticia->imagen); // Elimina la imagen anterior
            $imagenPath = $request->file('imagen')->store('noticias', 'public');
            $data['imagen'] = $imagenPath;
        }

        $noticia->update($data);

        return redirect()->route('noticias.index')->with('success', 'Publicación de noticia actualizada!');
    }

    public function destroy(Noticias $noticia)
    {
        Storage::disk('public')->delete($noticia->imagen); // Elimina la imagen
        $noticia->delete();

        return redirect()->route('noticias.index')->with('success', 'Publicación de noticia eliminada!');
    }
}