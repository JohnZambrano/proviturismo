@extends('layouts.myappCF')

@section('content')
<div class="container">
    <h1 class="title">🌟📝 Reseñas de la Plataforma Turística ProviTurismo 🗺️⭐</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($resenas->isEmpty())
        <p>No hay reseñas registradas.</p>
    @else
        <div class="card-container">
            @foreach ($resenas as $resena)
                <div class="card">
                    <div class="card-header">
                        <span class="badge bg-primary">{{ $resena->tipo }}</span>
                        <span class="badge bg-secondary">{{ $resena->origen }}</span>
                        <div class="stars">
                            @for($i = 1; $i <= 5; $i++)
                                <span class="star {{ $i <= ($resena->puntaje ?? 0) ? 'filled' : '' }}">★</span>
                            @endfor
                        </div>
                    </div>
                    @if (!empty($resena->fotos))
                       <div class="gallery">
                            @foreach ($resena->fotos as $foto)
                                <img src="{{ asset('storage/' . $foto) }}" 
                                     alt="Foto reseña" 
                                     class="gallery-img"
                                     loading="lazy">
                            @endforeach
                       </div>
                    @endif
                    
                    <div class="card-body">
                        <h5 class="card-title">Nombre: {{ $resena->elemento_uid }}</h5>
                        <p class="review-text">{{ $resena->texto_comentario ?? 'Sin comentario' }}</p>
                        <div class="metadata">
                            <small>Autor: {{ $resena->user->name }}</small>
                            <small>Publicado: {{ $resena->created_at->diffForHumans() }}</small>
                        </div>
                        
                        <div class="actions d-flex gap-2 align-items-center">
                            <button class="like-button" data-id="{{ $resena->id }}">
                                ❤️ Like <span class="like-count">52</span>
                            </button>
                            @can('editar-reseña')
                            <a href="{{ route('resenas.edit', $resena->id) }}" 
                               class="btn btn-primary">Editar</a>
                            @endcan
                            @can('borrar-reseña')
                            <form action="{{ route('resenas.destroy', $resena->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" 
                                        onclick="return confirm('¿Eliminar esta reseña permanentemente?')">
                                    Eliminar
                                </button>
                            </form>
                            @endcan
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagination">
            {{ $resenas->links() }}
        </div>
    @endif
</div>

<a href="{{ route('resenas.create') }}" class="btn">➕ Crear nueva Reseña</a>


<style>
    .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 10px;
        padding: 15px;
    }
    
    .gallery-img {
        width: 100%;
        height: 150px;
        object-fit: cover;
        border-radius: 8px;
    }
    
    .stars {
        color: #5d6d7e;
        font-size: 1.2em;
    }
    
    .star.filled {
        color: #ffbf00;
    }
    
    .review-text {
        line-height: 1.6;
        background: #f8f9fa;
        padding: 15px;
        border-radius: 8px;
    }
</style>

<script>
document.querySelectorAll('.like-button').forEach(button => {
    button.addEventListener('click', function() {
        const resenaId = this.dataset.id;
        const isLiked = this.dataset.liked === 'true';
        
        fetch(`/resenas/${resenaId}/like`, {
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
                this.style.color = isLiked ? '#6c757d' : '#dc3545';
            }
        });
    });
});
</script>
@endsection