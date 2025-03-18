<?php
namespace App\Http\Controllers;

use App\Models\Transporte;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Storage;




class ServicioTransporteController extends Controller
{
    public static function middleware(): array{ 
        return [
            // Define role-based permissions
            new \Spatie\Permission\Middleware\RoleMiddleware('ver-servicio-transporte', ['only' => ['index']]),
            new \Spatie\Permission\Middleware\RoleMiddleware('crear-servicio-transporte', ['only' => ['create', 'store']]),
            new \Spatie\Permission\Middleware\RoleMiddleware('editar-servicio-transporte', ['only' => ['edit', 'update']]),
            new \Spatie\Permission\Middleware\RoleMiddleware('borrar-servicio-transporte', ['only' => ['destroy']])
        ];
   }
    public function index()
    {
        $transportes = Transporte::paginate(12);
        return view('transportes.index', compact('transportes'));
    }

    public function create()
    {
        $permission = Permission::get();
        return view('transportes.crear',  compact('permission'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'nombre' => 'required|string|max:255', 
                'descripcion' => 'required|string|max:1000',
                'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ],
            [
                'descripcion.max' => 'La descripción supera el límite permitido 1000 caracteres. Sé preciso y evita textos redundantes.',
                'nombre.max' => 'El nombre debe ser breve y reflejar claramente la identidad del recurso (máx. 255 caracteres). [[1][6]]',
                'imagen.max' => 'La imagen excede el tamaño máximo de 2 MB.',
            ]
        );

        $imagenPath = $request->file('imagen')->store('transportes', 'public');

        Transporte::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'imagen' => $imagenPath,
        ]);

        return redirect()->route('transportes.index')->with('success', '¡Publicación de Transporte  creada!');
    }

    public function edit(Transporte $transporte)
    {
        return view('transportes.editar', compact('transporte'));
    }

    public function update(Request $request, Transporte $transporte)
    {
        $request->validate(
            [
                'nombre' => 'required|string|max:255', 
                'descripcion' => 'required|string|max:1000',
                'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ],
            [
                'descripcion.max' => 'La descripción supera el límite permitido 1000 caracteres. Sé preciso y evita textos redundantes.',
                'nombre.max' => 'El nombre debe ser breve y reflejar claramente la identidad del recurso (máx. 255 caracteres). [[1][6]]',
                'imagen.max' => 'La imagen excede el tamaño máximo de 2 MB.',
            ]
        );

        $data = $request->only('nombre', 'descripcion');

        if ($request->hasFile('imagen')) {
            Storage::disk('public')->delete($transporte->imagen);
            $data['imagen'] = $request->file('imagen')->store('transportes', 'public');
        }

        $transporte->update($data);

        return redirect()->route('transportes.index')->with('success', '¡Publicación de Transporte actualizada!');
    }

    public function destroy(Transporte $transporte)
    {
        Storage::disk('public')->delete($transporte->imagen);
        $transporte->delete();

        return redirect()->route('transportes.index')->with('success', '¡Publicación de Transporte eliminada!');
    }
}