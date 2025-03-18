@extends('layouts.myappTablas')

@section('content')
<div class="container-lg py-5">
    <div class="card shadow-lg border-0">
    <h1 class="title">🌟📝 Crear Nueva Reseña Turística 🗺️⭐</h1>

        <div class="card-body px-lg-5 py-4">
            <form action="{{ route('resenas.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                @csrf

                <!-- Sección de Información Básica -->
                <div class="row g-4 mb-5">
                    <div class="col-md-4">
                        <div class="form-floating">
                            <select name="tipo" id="tipo" class="form-select" required>
                                <option value="">Seleccione un tipo</option>
                                <option value="servicio">Servicio</option>
                                <option value="lugar">Lugar</option>
                                <option value="actividad">Actividad</option>
                            </select>
                            <label for="tipo">Tipo de Recurso:</label>
                            <div class="invalid-feedback">Por favor seleccione un tipo</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-floating">
                            <select name="origen" id="origen" class="form-select" required>
                                <option value="">Seleccione categoría</option>
                                <option value="senderismo">Senderismo</option>
                                <option value="mirador">Mirador</option>
                                <option value="excursionismo">Excursionismo</option>
                                <option value="servicioComida">Servicio de comida</option>
                                <option value="servicioHospedaje">Servicio de Hospedaje</option>
                                <option value="servicioTransporte">Servicio de Transporte</option>
                                <option value="actividadRecreativa">Actividad Recreativa</option>
                            </select>
                            <label for="origen">Clasificación:</label>
                            <div class="invalid-feedback">Por favor seleccione una categoría</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" name="elemento_uid" id="elemento_uid" 
                                   class="form-control" placeholder="Nombre del recurso" 
                                   required pattern=".{3,100}">
                            <label for="elemento_uid">Nombre del recurso a reseñar</label>
                            <div class="invalid-feedback">El nombre debe tener entre 3 y 100 caracteres</div>
                        </div>
                    </div>
                </div>

                <!-- Sección de Valoración -->
                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <div class="rating-container bg-light rounded-3 p-4">
                            <label class="form-label fw-bold mb-3">Califica tu experiencia:</label>
                            <div class="star-rating">
                                @for($i = 5; $i >= 1; $i--)
                                    <input type="radio" id="star{{$i}}" name="puntaje" 
                                           value="{{$i}}" required>
                                    <label for="star{{$i}}" 
                                           data-bs-toggle="tooltip" 
                                           data-bs-placement="bottom" 
                                           title="{{$i}} Estrella{{$i > 1 ? 's' : ''}}">
                                        ★
                                    </label>
                                @endfor
                            </div>
                            <div class="rating-feedback mt-2 small text-muted"></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating h-100">
                            <textarea name="texto_comentario" id="texto_comentario"
                                      class="form-control auto-expand" 
                                      placeholder="Escribe tu comentario"
                                      style="height: 150px; min-height: 150px; max-height: 300px"
                                      required></textarea>
                            <label for="texto_comentario">Comentario detallado</label>
                            <div class="text-end small mt-2">
                                <span id="charCount">0</span>/1000 caracteres
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sección de Multimedia -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="file-upload-card border-dashed rounded-3 p-4">
                            <label class="d-block text-center cursor-pointer">
                                <div class="mb-3">
                                    <i class="fas fa-cloud-upload-alt fa-3x text-primary"></i>
                                </div>
                                <h5 class="mb-2">Arrastra tus fotos aquí o haz clic para subir</h5>
                                <p class="text-muted small mb-0">
                                    Formatos permitidos: JPEG, JPG, PNG (Máx. 5MB por imagen)
                                </p>
                                <input type="file" name="fotos[]" id="fotos" 
                                       class="d-none" multiple accept="image/*">
                            </label>
                            <div id="galleryPreview" class="row g-3 mt-3"></div>
                        </div>
                    </div>
                </div>

                <!-- Botones de Acción -->
                <div class="d-grid gap-3 d-md-flex justify-content-md-end mt-5">
                    <button type="submit" class="btn btn-primary btn-lg px-4">
                        <i class="fas fa-paper-plane me-2"></i>Publicar Reseña
                    </button>
                    <a href="{{ route('resenas.index') }}" class="btn btn-outline-secondary btn-lg px-4">
                        <i class="fas fa-times me-2"></i>Cancelar
                    </a>
                     
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .star-rating {
        display: flex;
        flex-direction: row-reverse;
        font-size: 2.5rem;
        justify-content: center;
        gap: 0.5rem;
    }

    .star-rating label {
        color: #dee2e6;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .star-rating input:checked ~ label,
    .star-rating label:hover,
    .star-rating label:hover ~ label {
        color: #ffc107;
        transform: scale(1.1);
    }

    .file-upload-card {
        border: 2px dashed #dee2e6;
        transition: all 0.3s ease;
    }

    .file-upload-card:hover {
        border-color: #0d6efd;
        background-color: #f8f9fa;
    }

    .gallery-preview img {
        width: 100%;
        height: 150px;
        object-fit: cover;
        border-radius: 8px;
        transition: transform 0.2s;
    }

    .gallery-preview img:hover {
        transform: scale(1.05);
        z-index: 1;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Validación de formulario
    const forms = document.querySelector('.needs-validation')
    forms.addEventListener('submit', function(event) {
        if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.classList.add('was-validated')
    }, false)

    // Preview de imágenes
    const fileInput = document.getElementById('fotos')
    const gallery = document.getElementById('galleryPreview')
    
    fileInput.addEventListener('change', function(e) {
        gallery.innerHTML = ''
        const files = Array.from(e.target.files)
        
        files.slice(0, 5).forEach((file, index) => {
            if (!file.type.startsWith('image/')) return
            
            const reader = new FileReader()
            reader.onload = function(e) {
                const col = document.createElement('div')
                col.className = 'col-6 col-md-4 col-lg-3'
                col.innerHTML = `
                    <div class="position-relative">
                        <img src="${e.target.result}" class="img-thumbnail" alt="Preview ${index + 1}">
                        <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-1" 
                            onclick="this.parentElement.parentElement.remove()">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                `
                gallery.appendChild(col)
            }
            reader.readAsDataURL(file)
        })
    })

    // Contador de caracteres
    const textarea = document.getElementById('texto_comentario')
    const charCount = document.getElementById('charCount')
    
    textarea.addEventListener('input', function() {
        const currentLength = this.value.length
        charCount.textContent = currentLength
        
        if (currentLength > 1000) {
            this.value = this.value.substring(0, 1000)
            charCount.textContent = 1000
        }
        
        charCount.style.color = currentLength > 800 ? '#dc3545' : '#6c757d'
        this.style.height = 'auto'
        this.style.height = this.scrollHeight + 'px'
    })

    // Tooltips para las estrellas
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    tooltipTriggerList.map(triggerEl => new bootstrap.Tooltip(triggerEl))
})
</script>
@endsection