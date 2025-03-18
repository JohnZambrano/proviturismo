@extends('layouts.myappCF')

@section('content')
<div class="container">
    <h1 class="title">🍔📢 Lista de Publicaciones Gastronómicas 🍣🔥</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($restaurantes->isEmpty())
        <p>No hay publicaciones.</p>
    @else
        <div class="card-container">
            @foreach ($restaurantes as $restaurante)
                <div class="card">
                    @if ($restaurante->imagen)
                        <img src="{{ asset('storage/' . $restaurante->imagen) }}" alt="Imagen del restaurante">
                    @else
                        <img src="https://via.placeholder.com/400x200" alt="Sin imagen">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $restaurante->nombre }}</h5>
                        <p><strong>Detalles:</strong> {{ Str::limit($restaurante->descripcion, 1000, '...') }}</p>
                        @error('descripcion')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="actions d-flex gap-2 align-items-center">
                            
                            <!-- Botón Me Gusta -->
                            <button id="likeButton" class="like-button">
                            ❤️ Like <span id="likeCount" class="like-count">61</span>
                            </button>
                            @can('editar-servicio-restaurante')
                             <a href="{{ route('restaurantes.edit', $restaurante->id) }}" class="btn btn-primary">Editar</a>
                             @endcan
                             @can('borrar-servicio-restaurante')
                            <form action="{{ route('restaurantes.destroy', $restaurante->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta publicación de restaurante?')">Eliminar</button>
                            </form>
                            @endcan
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagination">
            {{ $restaurantes->links() }}
        </div>
    @endif

    
</div>
@can('crear-servicio-restaurante')
<a href="{{ route('restaurantes.create') }}" class="btn">➕ Crear publicación de restaurante</a>
@endcan
    
@endsection