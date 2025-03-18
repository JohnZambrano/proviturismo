@extends('layouts.myappTablas')

@section('content')
<div class="container-lg py-5">
    <div class="card shadow-lg border-0">
        <h1 class="title">📢 Editar publicación de Noticias🍣</h1>
        <div class="card-body px-lg-5 py-4">
            <form action="{{ route('noticias.update', $noticia->id) }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                @csrf
                @method('PUT')

                <div class="row g-4 mb-4">
                    <!-- Campo Título -->
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" 
                                   name="titulo" 
                                   id="titulo" 
                                   class="form-control @error('titulo') is-invalid @enderror"
                                   placeholder="Título de la noticia"
                                   value="{{ old('titulo', $noticia->titulo) }}"
                                   required
                                   maxlength="120">
                            <label for="titulo">Título</label>
                            @error('titulo')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="text-end small text-muted mt-1">
                                <span id="titleCounter">{{ strlen(old('titulo', $noticia->titulo)) }}</span>/120 caracteres
                            </div>
                        </div>
                    </div>

                    <!-- Campo Descripción -->
                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea 
                                name="descripcion" 
                                id="descripcion" 
                                class="form-control auto-expand @error('descripcion') is-invalid @enderror"
                                placeholder="Descripción completa"
                                style="min-height: 150px; max-height: 400px"
                                required
                                maxlength="2000">{{ old('descripcion', $noticia->descripcion) }}</textarea>
                            <label for="descripcion" class="form-label">Descripción</label>
                            @error('descripcion')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="text-end small text-muted mt-1">
                                <span id="descCounter">{{ strlen(old('descripcion', $noticia->descripcion)) }}</span>/2000 caracteres
                            </div>
                        </div>
                    </div>

                    <style>
                    .form-floating .form-control:focus + .form-label,
                    .form-floating .form-control:not(:placeholder-shown) + .form-label {
                        transform: translateY(-1.5rem);
                        font-size: 0.85rem;
                        opacity: 1;
                    }
                    </style>

                   <!-- Preview de Imagen -->
                    <div class="col-md-12 text-center">
                        <div class="image-preview-container mb-4 position-relative">
                            <img id="imagenSeleccionada" 
                                class="img-fluid rounded-3 shadow" 
                                src="{{ asset('storage/' . $noticia->imagen) }}"
                                style="max-height: 400px;">
                            <div id="placeholder" class="text-muted py-5" style="display: none;">
                                <i class="fas fa-image fa-3x mb-3"></i>
                                <p class="mb-0">Nueva vista previa de la imagen</p>
                            </div>
                            <button type="button" class="btn btn-danger position-absolute top-0 end-0 m-2" onclick="removeImage()">
                                <i class="fas fa-trash-alt"></i> <!-- Ícono de borrar -->
                            </button>
                        </div>
                    </div>

                    <script>
                    function removeImage() {
                        document.getElementById('imagenSeleccionada').style.display = 'none';
                        document.getElementById('placeholder').style.display = 'block';
                    }
                    </script>

                    <!-- Upload de Imagen -->
                    <div class="col-md-12">
                        <div class="file-upload-card border-dashed rounded-3 p-4">
                            <label class="d-block text-center cursor-pointer">
                                <div class="mb-3">
                                    <i class="fas fa-cloud-upload-alt fa-3x text-primary"></i>
                                </div>
                                <h5 class="mb-2">Arrastra nueva imagen o haz clic para cambiar</h5>
                                <p class="text-muted small mb-0">
                                    Formatos permitidos: JPEG, JPG, PNG (Máx. 5MB)
                                </p>
                                <input name="imagen" 
                                       id="imagen" 
                                       type="file" 
                                       class="d-none" 
                                       accept="image/*">
                            </label>
                        </div>
                        <small class="text-muted">Dejar en blanco para mantener la imagen actual</small>
                    </div>
                </div>

                <!-- Botones de Acción -->
                <div class="d-grid gap-3 d-md-flex justify-content-md-end mt-5">
                    <button type="submit" class="btn btn-primary btn-lg px-4" id="submitBtn">
                        <i class="fas fa-save me-2"></i>Guardar 
                    </button>
                    <a href="{{ route('noticias.index') }}" class="btn btn-outline-secondary btn-lg px-4">
                        <i class="fas fa-times me-2"></i>Cancelar
                    </a>
                  
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .file-upload-card {
        border: 2px dashed #dee2e6;
        transition: all 0.3s ease;
    }

    .file-upload-card:hover {
        border-color: #0d6efd;
        background-color: #f8f9fa;
    }

    .border-dashed {
        border-style: dashed!important;
    }

    .image-preview-container {
        background: #f8f9fa;
        border-radius: 12px;
        min-height: 200px;
    }

    .auto-expand {
        transition: height 0.2s ease;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Preview de imagen
    const imagenInput = document.getElementById('imagen');
    const imagenPreview = document.getElementById('imagenSeleccionada');
    const placeholder = document.getElementById('placeholder');

    imagenInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imagenPreview.src = e.target.result;
                imagenPreview.style.display = 'block';
                placeholder.style.display = 'none';
            }
            reader.readAsDataURL(file);
        }
    });

    // Contadores de caracteres
    const titleInput = document.getElementById('titulo');
    const titleCounter = document.getElementById('titleCounter');
    const descInput = document.getElementById('descripcion');
    const descCounter = document.getElementById('descCounter');

    titleInput.addEventListener('input', function() {
        titleCounter.textContent = this.value.length;
    });

    descInput.addEventListener('input', function() {
        const length = this.value.length;
        descCounter.textContent = length;
        
        // Auto-expand
        this.style.height = 'auto';
        this.style.height = this.scrollHeight + 'px';
    });

    // Validación de formulario
    const form = document.querySelector('.needs-validation');
    form.addEventListener('submit', function(event) {
        const submitBtn = document.getElementById('submitBtn');
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Guardando...';
        submitBtn.disabled = true;

        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
            submitBtn.innerHTML = '<i class="fas fa-save me-2"></i>Guardar Cambios';
            submitBtn.disabled = false;
        }
        form.classList.add('was-validated');
    }, false);
});
</script>
@endsection