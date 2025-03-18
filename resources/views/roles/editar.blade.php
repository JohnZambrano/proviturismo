@extends('layouts.myappTablas')

@section('content')
<div class="container-fluid px-4 mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3 class="page-heading mb-0">
                <i class="fas fa-shield-alt me-2"></i>Editar Rol
            </h3>
        </div>
        
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>¡Revise los campos!</strong>
                @foreach ($errors->all() as $error)
                    <div class="badge bg-danger text-white d-block my-1">{{ $error }}</div>
                @endforeach
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <form action="{{ route('roles.update', $role->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="name" class="form-label">Nombre del Rol</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            <input type="text" 
                                   class="form-control @error('name') is-invalid @enderror" 
                                   id="name" 
                                   name="name" 
                                   value="{{ old('name', $role->name) }}" 
                                   placeholder="Ingrese el nombre del rol" 
                                   required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Permisos para este Rol</label>
                        <div class="border rounded p-3">
                            <div class="row">
                                @foreach($permission as $value)
                                <div class="col-md-4 col-sm-6 mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" 
                                               type="checkbox" 
                                               name="permission[]" 
                                               value="{{ $value->id }}" 
                                               id="permission-{{ $value->id }}"
                                               {{ in_array($value->id, $rolePermissions) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="permission-{{ $value->id }}">
                                            {{ $value->name }}
                                        </label>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="d-grid gap-3 d-md-flex justify-content-md-end mt-5">
                    <button type="submit" class="btn btn-primary btn-lg px-4">
                        <i class="fas fa-paper-plane me-2"></i>Actualizar Rol
                    </button>
                    <a href="{{ route('roles.index') }}" class="btn btn-outline-secondary btn-lg px-4">
                        <i class="fas fa-times me-2"></i>Cancelar
                    </a>
                    
                </div>

            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const checkboxes = document.querySelectorAll('input[name="permission[]"]');
    
    const selectAll = document.createElement('div');
    selectAll.innerHTML = `
        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="select-all-permissions">
            <label class="form-check-label" for="select-all-permissions">
                Seleccionar/Deseleccionar Todos
            </label>
        </div>
    `;
    
    const permissionsContainer = document.querySelector('.border.rounded.p-3');
    permissionsContainer.insertBefore(selectAll, permissionsContainer.firstChild);
    
    const selectAllCheckbox = document.getElementById('select-all-permissions');
    selectAllCheckbox.addEventListener('change', function() {
        checkboxes.forEach(checkbox => {
            checkbox.checked = this.checked;
        });
    });
});
</script>
@endpush