@extends('layouts.myappCF')

@section('content')
<div class="container">
    <h1 class="title">🚗📢 Lista de Publicaciones sobre medios de Transporte 🚌✈️</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($transportes->isEmpty())
        <p>No hay transportes registrados.</p>
    @else
        <div class="card-container">
            @foreach ($transportes as $transporte)
                <div class="card">
                    @if ($transporte->imagen)
                        <img src="{{ asset('storage/' . $transporte->imagen) }}" alt="Imagen del transporte">
                    @else
                        <img src="https://via.placeholder.com/400x200" alt="Sin imagen">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $transporte->nombre }}</h5>
                        <p><strong>Detalles:</strong> {{ Str::limit($transporte->descripcion, 1000, '...') }}</p>
                        @error('descripcion')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="actions d-flex gap-2 align-items-center">
                        <button id="likeButton" class="like-button">
                        ❤️ Like <span id="likeCount" class="like-count">68</span>
                        </button>
                         @can('editar-servicio-transporte')
                            <a href="{{ route('transportes.edit', $transporte->id) }}" class="btn btn-primary">Editar</a>
                         @endcan
                         @can('borrar-servicio-transporte')
                            <form action="{{ route('transportes.destroy', $transporte->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta publicación de transporte?')">Eliminar</button>
                            </form>
                            @endcan
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagination">
            {{ $transportes->links() }}
        </div>
    @endif
</div>
@can('crear-servicio-transporte')
<a href="{{ route('transportes.create') }}" class="btn">➕ Crear nueva publicación de transporte</a>
@endcan
<script>
document.querySelectorAll('.like-btn').forEach(button => {
    button.addEventListener('click', function() {
        const transporteId = this.dataset.id;
        const isLiked = this.dataset.liked === 'true';
        
        fetch(`/transportes/${transporteId}/like`, {
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