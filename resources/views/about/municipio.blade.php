@extends('layouts.myappCF')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>

     <link rel="stylesheet" href="{{ asset('css/municipio.css') }}">
     <link rel="stylesheet" href="{{ asset('css/pdf.css') }}">

</head>
<body> 


<!-- Sección Información General -->
<section id="informacion" class="py-5">
    <br>
    <div class="container">   
    <h2 class="section-title text-center mb-5">Municipio de Providencia-Nariño: </h2>
        <div class="row g-4">

            <!-- Mapa -->
            <div class="col-lg-6 scroll-animation">
                <div class="card card-hover">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8854609997!2d-77.60000487532982!3d1.239017998749179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2eb5b7e95c8387%3A0xa60660f1937ca9d4!2sProvidencia%2C%20Nari%C3%B1o!5e0!3m2!1ses!2sco!4v1684787351783!5m2!1ses!2sco" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-map-marked-alt me-2"></i>Ubicación Geográfica
                        </h5>
                        <p class="card-text">Limita al norte con Samaniego y Guaitarilla, al sur con Guaitarilla y Túquerres...</p>
                        
                        <!-- Botón para Google Maps -->
                        <div class="text-center mt-3">
                            <a href="https://www.google.com/maps/place/Providencia,+Nari%C3%B1o/@1.239018,-77.59743,731m/data=!3m1!1e3!4m6!3m5!1s0x8e2eb5c868ca5b1d:0x1080f36de3551c0c!8m2!3d1.2120223!4d-77.5963271!16s%2Fm%2F02qmv3c!5m1!1e1?hl=es&entry=ttu&g_ep=EgoyMDI1MDIyNi4xIKXMDSoASAFQAw%3D%3D" 
                            class="btn btn-outline-primary" 
                            target="_blank">
                                <i class="fas fa-map-marker-alt me-2"></i>Ver en Google Maps
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Población -->
            <div class="col-lg-6 scroll-animation">
                <div class="card card-hover">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-users me-2"></i>Datos Demográficos</h5>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Año</th>
                                        <th>Población</th>
                                        <th>Crecimiento</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2024</td>
                                        <td>5,818</td>
                                        <td><span class="badge bg-success">+2.5%</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección Descripción Física -->
<section class="bg-light py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Descripción Física:</h2>
        
        <div class="row g-4">
            <div class="col-md-4 scroll-animation">
                <div class="card card-hover text-center py-4">
                    <i class="fas fa-mountain fa-3x text-primary"></i>
                    <div class="card-body">
                        <h5>Extensión Total</h5>
                        <p class="mb-0">44.03 Km²</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 scroll-animation">
                <div class="card card-hover text-center py-4">
                    <i class="fas fa-thermometer-half fa-3x text-primary"></i>
                    <div class="card-body">
                        <h5>Temperatura Media</h5>
                        <p>16°C - 24°C (Norte)<br>6°C - 9°C (Sur)</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 scroll-animation">
                <div class="card card-hover text-center py-4">
                    <i class="fas fa-chart-line fa-3x text-primary"></i>
                    <div class="card-body">
                        <h5>Altitud</h5>
                        <p>1600 - 3300 msnm</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección Historia -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Historia:</h2>
        
        <div class="row">
            <div class="col-lg-6 scroll-animation">
                <div class="card card-hover">
                    <div class="card-body">
                        <h5><i class="fas fa-landmark me-2"></i>Fundación</h5>
                        <p class="timeline-step">27 de Noviembre de 1992<br>
                        <small>Fundadores: Joaquín, Simón y Evangelista Rodríguez</small></p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 scroll-animation">
                <div class="card card-hover">
                    <div class="card-body">
                        <h5><i class="fas fa-history me-2"></i>Asentamientos</h5>
                        <p>Primer asentamiento en San Francisco<br>
                        Cultura Pastos - Poblado de los Abades</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección Economía -->
<section class="bg-light py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Economía:</h2>
        
        <div class="row g-4">
            <div class="col-md-6 scroll-animation">
                <div class="card card-hover">
                    <div class="card-body">
                        <h5><i class="fas fa-city me-2"></i>Zona Urbana</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Comercio a pequeña escala</li>
                            <li class="list-group-item">Servicios públicos</li>
                            <li class="list-group-item">Infraestructura básica</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 scroll-animation">
                <div class="card card-hover">
                    <div class="card-body">
                        <h5><i class="fas fa-tractor me-2"></i>Zona Rural</h5>
                        <div class="accordion" id="economiaRural">
                            <div class="accordion-item">
                                <h6 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#agricultura">
                                        Agricultura
                                    </button>
                                </h6>
                                <div id="agricultura" class="accordion-collapse collapse show">
                                    <div class="accordion-body">
                                        Maíz, Papa, Haba, Trigo, Ulluco, Aguacate
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h6 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ganaderia">
                                        Ganadería
                                    </button>
                                </h6>
                                <div id="ganaderia" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        Veredas productoras de leche
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Sección Descargas - Versión Mejorada -->
<section class="downloads-section py-5">
    <div class="container">
        <h2 class="section-title text-center mb-4 mb-lg-5">Documentos informativos para descargar</h2>
        
        <div class="row g-4 justify-content-center px-lg-4">
            <!-- Tarjeta Lugares Turísticos -->
            <div class="col-12 col-sm-10 col-md-6 col-lg-4 col-xl-3">
                <article class="download-card card card-hover h-100">
                    <div class="card-body d-flex flex-column align-items-center text-center">
                        <div class="icon-wrapper mb-4">
                            <i class="fas fa-map-marked-alt fa-3x text-primary"></i>
                        </div>
                        <h3 class="card-title h5 mb-3">Guía de lugares turísticos</h3>
                        <a href="{{ asset('pdfs/lugares-turisticos.pdf') }}" 
                           class="btn btn-primary mt-auto w-100 py-2"
                           download="Lugares-Turisticos-Providencia.pdf"
                           aria-label="Descargar guía de lugares turísticos">
                            <i class="fas fa-download me-2"></i>
                            <span>PDF</span>
                        </a>
                    </div>
                </article>
            </div>

            <!-- Tarjeta Actividades Culturales -->
            <div class="col-12 col-sm-10 col-md-6 col-lg-4 col-xl-3">
                <article class="download-card card card-hover h-100">
                    <div class="card-body d-flex flex-column align-items-center text-center">
                        <div class="icon-wrapper mb-4">
                            <i class="fas fa-theater-masks fa-3x text-primary"></i>
                        </div>
                        <h3 class="card-title h5 mb-3">Guía de actividades culturales</h3>
                        <a href="{{ asset('pdfs/actividades-culturales.pdf') }}" 
                           class="btn btn-primary mt-auto w-100 py-2"
                           download="Cultura-Providencia.pdf"
                           aria-label="Descargar calendario de actividades culturales">
                            <i class="fas fa-download me-2"></i>
                            <span>PDF</span>
                        </a>
                    </div>
                </article>
            </div>

            <!-- Tarjeta Historia -->
            <div class="col-12 col-sm-10 col-md-6 col-lg-4 col-xl-3">
                <article class="download-card card card-hover h-100">
                    <div class="card-body d-flex flex-column align-items-center text-center">
                        <div class="icon-wrapper mb-4">
                            <i class="fas fa-landmark fa-3x text-primary"></i>
                        </div>
                        <h3 class="card-title h5 mb-3">Libro sobre historia y cultura de Providencia</h3>
                        <a href="{{ asset('pdfs/historia-providencia.pdf') }}" 
                           class="btn btn-primary mt-auto w-100 py-2"
                           download="Historia-Providencia.pdf"
                           aria-label="Descargar documento histórico">
                            <i class="fas fa-download me-2"></i>
                            <span>PDF</span>
                        </a>
                    </div>
                </article>
            </div>

            <!-- Tarjeta Trabajo de Grado -->
            <div class="col-12 col-sm-10 col-md-6 col-lg-4 col-xl-3">
                <article class="download-card card card-hover h-100">
                    <div class="card-body d-flex flex-column align-items-center text-center">
                        <div class="icon-wrapper mb-4">
                            <i class="fas fa-graduation-cap fa-3x text-primary"></i>
                        </div>
                        <h3 class="card-title h5 mb-3">Investigación académica del proyecto ProviTurismo</h3>
                        <a href="{{ asset('pdfs/trabajo-grado.pdf') }}" 
                           class="btn btn-primary mt-auto w-100 py-2"
                           download="Tesis-Providencia.pdf"
                           aria-label="Descargar trabajo de grado">
                            <i class="fas fa-download me-2"></i>
                            <span>PDF</span>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<script>
    // Animación al hacer scroll
    const scrollElements = document.querySelectorAll('.scroll-animation');
    
    const elementInView = (el) => {
        const elementTop = el.getBoundingClientRect().top;
        return elementTop <= window.innerHeight * 0.75;
    };
    
    const displayScrollElement = (element) => {
        element.classList.add('active');
    };

    window.addEventListener('scroll', () => {
        scrollElements.forEach((el) => {
            if (elementInView(el)) {
                displayScrollElement(el);
            }
        });
    });
</script>

<!-- Bootstrap JS y dependencias -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/your-kit-code.js"></script>

</body>
</html>
@endsection