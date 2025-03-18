@extends('layouts.myappCF')

@section('content')
<section class="container py-5">
    <h2 class="section-title text-center mb-5 animate__animated animate__fadeIn fw-bolder text-uppercase" 
        style="text-shadow: 2px 2px 4px rgba(0,0,0,0.1); transform: translateY(-5px);">
        Planea tu Viaje a Providencia
    </h2>
    
    <div class="row g-4 justify-content-center">
        <!-- Cómo Llegar -->
        <div class="col-12 col-md-10 col-lg-4 mx-auto scroll-animation">
            <div class="card card-hover shadow-lg h-100 border-0">
                <div class="card-body text-center py-4">
                    <i class="fas fa-map-signs fa-3x text-primary mb-3"></i>
                    <h3 class="card-title gradient-underline">Cómo Llegar</h3>
                    <p class="card-text">Descubre las mejores rutas y opciones de transporte</p>
                    <a href="/servicios/transporte" class="btn btn-outline-primary btn-redirect">
                        <i class="fas fa-route me-2"></i>Ver Rutas
                    </a>
                </div>
            </div>
        </div>

        <!-- Alojamiento -->
        <div class="col-12 col-md-10 col-lg-4 mx-auto scroll-animation">
            <div class="card card-hover shadow-lg h-100 border-0">
                <div class="card-body text-center py-4">
                    <i class="fas fa-hotel fa-3x text-primary mb-3"></i>
                    <h3 class="card-title gradient-underline">Alojamiento</h3>
                    <p class="card-text">Encuentra tu hospedaje ideal</p>
                    <a href="/servicios/hoteles" class="btn btn-outline-primary btn-redirect">
                        <i class="fas fa-bed me-2"></i>Ver Opciones
                    </a>
                </div>
            </div>
        </div>

        <!-- Actividades -->
        <div class="col-12 col-md-10 col-lg-4 mx-auto scroll-animation">
            <div class="card card-hover shadow-lg h-100 border-0">
                <div class="card-body text-center py-4">
                    <i class="fas fa-hiking fa-3x text-primary mb-3"></i>
                    <h3 class="card-title gradient-underline">Actividades</h3>
                    <p class="card-text">Tours y experiencias únicas</p>
                    <a href="/evento_cultural/index" class="btn btn-outline-primary btn-redirect">
                        <i class="fas fa-calendar-alt me-2"></i>Ver Tours
                    </a>
                </div>
            </div>
        </div>

        <!-- Itinerario -->
        <div class="col-12 col-md-10 col-lg-4 mx-auto scroll-animation">
            <div class="card card-hover shadow-lg h-100 border-0">
                <div class="card-body text-center py-4">
                    <i class="fas fa-clipboard-list fa-3x text-primary mb-3"></i>
                    <h3 class="card-title gradient-underline">Mi Itinerario</h3>
                    <p class="card-text">Organiza tu plan de viaje</p>
                    <a href="/lugar_turistico/index" class="btn btn-outline-primary btn-redirect">
                        <i class="fas fa-plus-circle me-2"></i>Crear Plan
                    </a>
                </div>
            </div>
        </div>

        <!-- Información Práctica -->
        <div class="col-12 col-md-10 col-lg-4 mx-auto scroll-animation">
            <div class="card card-hover shadow-lg h-100 border-0">
                <div class="card-body text-center py-4">
                    <i class="fas fa-info-circle fa-3x text-primary mb-3"></i>
                    <h3 class="card-title gradient-underline">Información Útil</h3>
                    <p class="card-text">Todo lo que necesitas saber</p>
                    <a href="/about/municipio" class="btn btn-outline-primary btn-redirect">
                        <i class="fas fa-book-open me-2"></i>Ver sobre El Municipio
                    </a>
                </div>
            </div>
        </div>

        <!-- Experiencias -->
        <div class="col-12 col-md-10 col-lg-4 mx-auto scroll-animation">
            <div class="card card-hover shadow-lg h-100 border-0">
                <div class="card-body text-center py-4">
                    <i class="fas fa-comments fa-3x text-primary mb-3"></i>
                    <h3 class="card-title gradient-underline">Experiencias</h3>
                    <p class="card-text">Lo que dicen otros viajeros</p>
                    <a href="/resenas" class="btn btn-outline-primary btn-redirect">
                        <i class="fas fa-star me-2"></i>Ver Reseñas
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<style>

    .section-title {
        letter-spacing: 1.5px;
        position: relative;
        z-index: 2;
        color: #212f3d  !important; /* Color negro sólido */
        font-size: 2.5rem;
        margin: 2rem 0;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1); /* Sombra para mejor contraste */
    }

    .section-title::after {
        content: '';
        position: absolute;
        left: 50%;
        bottom: -10px;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: var(--secondary-color); /* Mantiene el color del subrayado */
        border-radius: 2px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Sombra adicional para el subrayado */
    }

    .card-hover {
        transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        border-radius: 12px;
        overflow: hidden;
    }

    .card-hover:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 12px 28px rgba(0,0,0,0.15) !important;
    }

    .shadow-lg {
        box-shadow: 0 8px 20px rgba(0,0,0,0.1) !important;
    }

    .drop-shadow {
        filter: drop-shadow(2px 2px 4px rgba(0,0,0,0.1));
    }

    @media (max-width: 768px) {
        .section-title {
            font-size: 2rem;
            margin: 1.5rem 0;
        }
        
        .col-md-10 {
            width: 90% !important;
            max-width: 400px;
        }
        
        .card-body {
            padding: 1.5rem !important;
        }
    }

    .gradient-underline::after {
        background: linear-gradient(90deg, 
            var(--primary-color) 0%, 
            var(--secondary-color) 100%);
        height: 2.5px;
        width: 70%;
    }

    .btn-redirect {
        border-width: 2.5px;
        font-weight: 700;
        letter-spacing: 0.5px;
    } 

    .gradient-underline {
        position: relative;
        padding-bottom: 10px;
        margin-bottom: 1.5rem;
    }
    
    .gradient-underline::after {
        content: '';
        position: absolute;
        left: 50%;
        bottom: 0;
        transform: translateX(-50%);
        width: 60%;
        height: 3px;
        background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
    }

    .btn-redirect {
        border-width: 2px;
        font-weight: 600;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        min-width: 160px;
        position: relative;
        overflow: hidden;
    }

    .btn-redirect:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.15);
    }

    .btn-redirect::after {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(45deg, 
            transparent, 
            rgba(var(--primary-color-rgb), 0.1), 
            transparent);
        transform: rotate(45deg);
        transition: all 0.5s;
    }

    .btn-redirect:hover::after {
        left: 150%;
    }

    .card-hover {
        transition: transform 0.3s, box-shadow 0.3s;
        border: none;
        border-radius: 15px;
    }
</style>
@endsection