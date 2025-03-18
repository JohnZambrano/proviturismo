@extends('layouts.myappCF')

@section('content')
<div class="container">
    <h1 class="title">🏨📢 Lista de publicaciones de Hoteles disponibles 🌟🛎️</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($hoteles->isEmpty())
        <p>No hay hoteles registrados.</p>
    @else
        <div class="card-container">
            @foreach ($hoteles as $hotel)
                 <div class="card">
                    @if ($hotel->imagen)
                        <img src="{{ asset('storage/' . $hotel->imagen) }}" alt="Imagen del hotel" class="hotel-image">
                    @else
                        <img src="https://via.placeholder.com/400x200" alt="Sin imagen" class="placeholder-image">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $hotel->nombre }}</h5>
                        <p><strong>Detalles:</strong> {{ Str::limit($hotel->descripcion, 1000, '...') }}</p>
                        @error('descripcion')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="actions d-flex gap-2 align-items-center">
                        <button id="likeButton" class="like-button">
                        ❤️ Like <span id="likeCount" class="like-count">81</span>
                        </button>
                          @can('editar-servicio-hotel')
                            <a href="{{ route('hoteles.edit', $hotel->id) }}" class="btn btn-primary">Editar</a>
                          @endcan
                          @can('borrar-servicio-hotel')
                            <form action="{{ route('hoteles.destroy', $hotel->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta publicación de hotel?')">Eliminar</button>
                            </form>
                           @endcan
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagination">
            {{ $hoteles->links() }}
        </div>
    @endif
</div>
@can('crear-servicio-hotel')
<a href="{{ route('hoteles.create') }}" class="btn">➕ Crear nueva publicación de Hotel</a>
@endcan


<script>
document.querySelectorAll('.like-btn').forEach(button => {
    button.addEventListener('click', function() {
        const noticeId = this.dataset.id;
        const isLiked = this.dataset.liked === 'true';
        
        fetch(`/restaurantes/${noticeId}/like`, {
            method: isLiked ? 'DELETE' : 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => response.json())
        .then(data => {
            if(data.success) {
                this.dataset.liked = !isLiked;
                this.querySelector('.like-count').textContent = data.likesCount;
                this.querySelector('i').style.color = isLiked ? '#6c757d' : '#dc3545';
                this.classList.toggle('btn-outline-primary', isLiked);
                this.classList.toggle('btn-danger', !isLiked);
            }
        });
    });
});
</script>
    
@endsection