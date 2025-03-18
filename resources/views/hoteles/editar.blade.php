@extends('layouts.myappTablas')

@section('content')
<div class="container">
    <h1 class="title">🏨 Editar publicación de Hotel🛎️</h1>

    <form action="{{ route('hoteles.update', $hotel->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row mt-5">
            <div class="col-md-6">
                <label for="nombre" class="form-label">Nombre del Hotel:</label>
                <div class="invalid-feedback">Por favor ingrese un nombre válido</div>
                <input type="text" name="nombre" id="nombre" class="form-control" 
                 value="{{ $hotel->nombre }}" required maxlength="255">
                 <div class="text-end small text-muted mt-1">
                    <span id="nombreCounter">0</span>/255 caracteres
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-label-wrapper">
                    <span class="form-label">Detalles:</span>
                    @error('descripcion')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <textarea name="descripcion" id="descripcion" 
                    class="form-control auto-expand" 
                    required 
                    style="min-height: 120px; max-height: 300px; overflow-y: auto; resize: none">{{ old('descripcion', $hotel->descripcion) }}
                </textarea>
                <div class="invalid-feedback">Por favor ingrese una descripción</div>
                    <div class="text-end small text-muted mt-1">
                        <span id="descCounter">0</span>/1000 caracteres
                    </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-4 position-relative">
                <div class="image-preview-container">
                    <img src="{{ asset('storage/' . $hotel->imagen) }}" 
                         class="img-fluid rounded hotel-current-image"
                         id="imagenSeleccionada"
                         alt="Imagen actual del hotel">
                    <button type="button" 
                            class="btn btn-danger btn-remove-image"
                            onclick="handleImageRemoval()"
                            title="Eliminar imagen">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </div>
                <input type="hidden" name="eliminar_imagen" id="eliminarImagen" value="0">
            </div>
        </div>

        <div class="container mt-5 mx-3">
            <label class="text-uppercase text-muted font-weight-bold mb-2">Actualizar Imagen</label>
            <div class="file-upload-card">
                <label class="upload-label">
                    <div class="upload-content">

                        <div class="mb-3 center-icon">
                            <i class="fas fa-camera fa-3x text-primary"></i>
                        </div>
                        
                        <p class="upload-text">Arrastra o haz clic para subir nueva imagen</p>
                        <small class="text-muted">(Formatos: JPG, PNG, JPEG - Máx. 5MB)</small>
                    </div>
                    <input name="imagen" id="imagen" type="file" class="file-input">
                </label>
            </div>
            <small class="text-muted">Dejar en blanco para mantener la imagen actual</small>
        </div>

          <!-- Botones de Acción -->
          <div class="d-grid gap-3 d-md-flex justify-content-md-end mt-5">
                <button type="submit" class="btn btn-primary btn-lg px-4" id="submitBtn">
                    <i class="fas fa-save me-2"></i>Actualizar
                </button>
                <a href="{{ route('hoteles.index') }}" class="btn btn-outline-secondary btn-lg px-4">
                    <i class="fas fa-times me-2"></i>Cancelar
                </a>
                
            </div>
</form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {
        // Preview de nueva imagen
        $('#imagen').change(function() {
            if (this.files && this.files[0]) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    $('#imagenSeleccionada').attr('src', e.target.result);
                    $('#eliminarImagen').val(0);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });

        // Autoajuste del textarea
        $('#descripcion').on('input', function() {
            this.style.height = 'auto';
            this.style.height = (this.scrollHeight) + 'px';
        }).trigger('input');
    });

    function handleImageRemoval() {
        $('#imagenSeleccionada').attr('src', '{{ asset("images/placeholder.jpg") }}');
        $('#eliminarImagen').val(1);
        $('#imagen').val('');
    }

     // Contadores de caracteres
     const nombreInput = document.getElementById('nombre');
    const nombreCounter = document.getElementById('nombreCounter');
    const descInput = document.getElementById('descripcion');
    const descCounter = document.getElementById('descCounter');

    nombreInput.addEventListener('input', function() {
        nombreCounter.textContent = this.value.length;
    });

    descInput.addEventListener('input', function() {
        const length = this.value.length;
        descCounter.textContent = length;
        
        // Auto-expand
        this.style.height = 'auto';
        this.style.height = this.scrollHeight + 'px';
    });
</script>

<style>
    /* Estilos consistentes con el tema */
    .title {
        color: #2c3e50;
        font-weight: 700;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
    }

    .form-label {
        font-weight: 600;
        color: #34495e;
        margin-bottom: 0.5rem;
    }

    .form-label-wrapper {
        cursor: default;
        user-select: none;
    }

    .image-preview-container {
        position: relative;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .btn-remove-image {
        position: absolute;
        top: 10px;
        right: 10px;
        padding: 0.5rem;
        border-radius: 50%;
        opacity: 0.9;
        transition: all 0.2s ease;
    }

    .btn-remove-image:hover {
        opacity: 1;
        transform: scale(1.1);
    }

    .file-upload-card {
        border: 2px dashed #bdc3c7;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .upload-label {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 2rem;
        cursor: pointer;
        min-height: 150px;
    }

    .upload-icon {
        width: 40px;
        height: 40px;
        stroke: #7f8c8d;
        margin-bottom: 1rem;
    }

    .upload-text {
        color: #7f8c8d;
        margin-bottom: 0.5rem;
    }

    .file-input {
        opacity: 0;
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        cursor: pointer;
    }

    .file-upload-card:hover {
        border-color: #3498db;
        background-color: #f8f9fa;
    }
</style>
@endsection