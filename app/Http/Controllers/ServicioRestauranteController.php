<?php

namespace App\Http\Controllers;

use App\Models\Restaurante; // Importa el modelo Restaurante
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Spatie\Permission\Models\Permission;


class ServicioRestauranteController extends Controller
{
    public static function middleware(): array{ 
        return [
            // Define role-based permissions
            new \Spatie\Permission\Middleware\RoleMiddleware('ver-servicio-restaurante', ['only' => ['index']]),
            new \Spatie\Permission\Middleware\RoleMiddleware('crear-servicio-restaurante', ['only' => ['create', 'store']]),
            new \Spatie\Permission\Middleware\RoleMiddleware('editar-servicio-restaurante', ['only' => ['edit', 'update']]),
            new \Spatie\Permission\Middleware\RoleMiddleware('borrar-servicio-restaurante', ['only' => ['destroy']])
        ];
   }
    public function index()
    {
        $restaurantes = Restaurante::paginate(12); // Pagina las publicaciones, ajusta el número según necesites
        return view('restaurantes.index', compact('restaurantes'));
    }

    public function create()
    {
        $permission = Permission::get();
        return view('restaurantes.crear',  compact('permission'));
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

        $imagenPath = $request->file('imagen')->store('restaurantes', 'public');

        Restaurante::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'imagen' => $imagenPath,
        ]);

        return redirect()->route('restaurantes.index')->with('success', '¡Publicación de restaurante creada!');
    }

    public function edit(Restaurante $restaurante)
    {
        return view('restaurantes.editar', compact('restaurante'));
    }

    public function update(Request $request, Restaurante $restaurante)
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

        $data = [
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
        ];

        if ($request->hasFile('imagen')) {
            Storage::disk('public')->delete($restaurante->imagen); // Elimina la imagen anterior
            $imagenPath = $request->file('imagen')->store('restaurantes', 'public');
            $data['imagen'] = $imagenPath;
        }

        $restaurante->update($data);

        return redirect()->route('restaurantes.index')->with('success', '¡Publicación de restaurante actualizada!');
    }

    public function destroy(Restaurante $restaurante)
    {
        Storage::disk('public')->delete($restaurante->imagen); // Elimina la imagen
        $restaurante->delete();

        return redirect()->route('restaurantes.index')->with('success', '¡Publicación de restaurante eliminada!');
    }
}