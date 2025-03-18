@extends('layouts.myappTablas')

@section('content')
<div class="container-fluid px-4 mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3 class="page-heading mb-0">
                <i class="fas fa-shield-alt me-2"></i>Roles
            </h3>
            @can('crear-rol')
            <a href="{{ route('roles.create') }}" class="btn btn-warning">
                <i class="fas fa-plus-circle me-1"></i> Nuevo
            </a>
            @endcan
        </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th>Rol</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                        <tr>
                            <td>{{ $role->name }}</td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    @can('editar-rol')
                                    <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-sm btn-primary me-2">
                                        <i class="fas fa-edit me-1"></i>Editar
                                    </a>
                                    @endcan
                                    
                                    @can('borrar-rol')
                                    <form action="{{ route('roles.destroy', $role->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Está seguro de eliminar este rol?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash me-1"></i>Borrar
                                        </button>
                                    </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-end mt-3">
                {{ $roles->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Optional: Add any client-side interactions for roles management
    });
</script>
@endpush
