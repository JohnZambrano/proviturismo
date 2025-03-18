@extends('layouts.myappTablas')

@section('content')
<div class="container-fluid px-4 mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">
                <i class="fas fa-users me-2"></i>Administración de Usuarios
            </h3>
            @can('crear-usuario')
            <a href="{{ route('usuarios.create') }}" class="btn btn-warning">
                <i class="fas fa-plus-circle me-1"></i> Nuevo Usuario
            </a>
            @endcan
        </div>
        
        <div class="card-body">
            @if($usuarios->count() > 0)
                <div class="table-responsive" style="overflow-x: auto;">
                    <table class="table table-bordered table-hover" style="min-width: 1000px;">
                        <thead class="table-light">
                            <tr>
                                <th style="min-width: 70px;">ID</th>
                                <th style="min-width: 250px;">Nombre</th>
                                <th style="min-width: 300px;">E-mail</th>
                                <th style="min-width: 200px;">Rol</th>
                                <th style="min-width: 250px;" class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->id }}</td>
                                <td>{{ $usuario->name }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>
                                    @forelse($usuario->getRoleNames() as $rolName)
                                        <span class="badge bg-dark">{{ $rolName }}</span>
                                    @empty
                                        <span class="badge bg-primary">Sin rol</span>
                                    @endforelse
                                </td>
                                <td class="text-center">
                                    @can('editar-usuario')
                                    <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    @endcan
                                    
                                    @can('borrar-usuario')
                                    <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar usuario?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-3">
                    {{ $usuarios->links('pagination::bootstrap-4') }}
                </div>
            @else
                <div class="alert alert-info text-center" role="alert">
                    <i class="fas fa-info-circle me-2"></i>
                    No hay usuarios registrados. 
                    <a href="{{ route('usuarios.create') }}" class="alert-link">Crear nuevo usuario</a>
                </div>
            @endif
        </div>
    </div>
</div>

<style>
/* Scroll horizontal garantizado */
.table-responsive {
    -webkit-overflow-scrolling: touch;
    overflow-x: auto;
}

/* Estilos optimizados para móviles */
@media (max-width: 768px) {
    .table {
        width: 100%;
        margin-bottom: 1rem;
        font-size: 0.9rem;
    }
    
    .btn {
        padding: 0.25rem 0.5rem;
        font-size: 0.8rem;
        margin: 2px;
    }
    
    .badge {
        font-size: 0.75rem;
    }
}
</style>

@endsection