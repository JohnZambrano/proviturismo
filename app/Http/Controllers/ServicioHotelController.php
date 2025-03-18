<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Spatie\Permission\Models\Permission;


class ServicioHotelController extends Controller
{
    public static function middleware(): array{ 
        return [
            // Define role-based permissions
            new \Spatie\Permission\Middleware\RoleMiddleware('ver-servicio-hotel', ['only' => ['index']]),
            new \Spatie\Permission\Middleware\RoleMiddleware('crear-servicio-hotel', ['only' => ['create', 'store']]),
            new \Spatie\Permission\Middleware\RoleMiddleware('editar-servicio-hotel', ['only' => ['edit', 'update']]),
            new \Spatie\Permission\Middleware\RoleMiddleware('borrar-servicio-hotel', ['only' => ['destroy']])
        ];
   }
    public function index()
    {
        $hoteles = Hotel::paginate(12);
        return view('hoteles.index', compact('hoteles'));
    }

    public function create()
    {
        $permission = Permission::get();
        return view('hoteles.crear',  compact('permission'));
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

        $imagenPath = $request->file('imagen')->store('hoteles', 'public');

        Hotel::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'imagen' => $imagenPath,
        ]);

        return redirect()->route('hoteles.index')->with('success', '¡Publicación de hotel creada exitosamente!');
    }

    public function edit(Hotel $hotel)
    {
        return view('hoteles.editar', compact('hotel'));
    }

    public function update(Request $request, Hotel $hotel)
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

        $data = $request->only(['nombre', 'descripcion']);

        if ($request->hasFile('imagen')) {
            Storage::disk('public')->delete($hotel->imagen);
            $data['imagen'] = $request->file('imagen')->store('hoteles', 'public');
        }

        $hotel->update($data);

        return redirect()->route('hoteles.index')->with('success', '¡Publicación de hotel actualizada exitosamente!');
    }

    public function destroy(Hotel $hotel)
    {
        Storage::disk('public')->delete($hotel->imagen);
        $hotel->delete();

        return redirect()->route('hoteles.index')->with('success', '¡Publicación de hotel eliminada exitosamente!');
    }
}