<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProviTurismo</title>
    <link rel="icon" type="image/png" href="{{ asset('img/log.png') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Tus estilos CSS -->
     <link rel="stylesheet" href="{{ asset('css/carrusel.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/styleswelcome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <!-- Sección para todo lo referente al navbar -->

    <div class="min-h-screen d-flex flex-column">
        <!-- Navbar con nuevas clases -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('img/LogoProviTurismo.png') }}" alt="ProviTurismo Logo" class="navbar-logo me-2">
                    <a class="navbar-brand" href="{{ url('/') }}">ProviTurismo</a>
                </div>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="viajesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-plane-departure me-1"></i> Viaja a Providencia
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="viajesDropdown">
                            <li><a class="dropdown-item" href="{{ url('/about/planea') }}"><i class="fas fa-map-marked-alt me-2"></i> Planea tu Viaje</a></li>
                            <li><a class="dropdown-item" href="{{ url('/lugar_turistico/index') }}"><i class="fas fa-camera-retro me-2"></i> Atractivos Turísticos</a></li>
                            <li><a class="dropdown-item" href="{{ url('/evento_cultural/index') }}"><i class="fas fa-calendar-alt me-2"></i> Eventos Culturales</a></li>
                            <li><a class="dropdown-item" href="{{ url('/evento_cultural/vista11') }}"><i class="fas fa-walking me-2"></i> Tours Guiados</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="serviciosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-concierge-bell me-1"></i> Servicios turísticos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="serviciosDropdown">
                            <li><a class="dropdown-item" href="{{ url('/servicios/hoteles') }}"><i class="fas fa-bed me-2"></i> Hoteles</a></li>
                            <li><a class="dropdown-item" href="{{ url('/servicios/restaurantes') }}"><i class="fas fa-utensils me-2"></i> Restaurantes</a></li>
                            <li><a class="dropdown-item" href="{{ url('/servicios/transporte') }}"><i class="fas fa-bus-alt me-2"></i> Transporte</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resenas') }}"><i class="fas fa-comments me-2"></i> Reseñas y comentarios</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="historiaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-book"></i> Municipio
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="historiaDropdown">
                            <li><a class="dropdown-item" href="{{ url('/noticias') }}"><i class="fas fa-newspaper me-2"></i> Noticias</a></li>
                            <li><a class="dropdown-item" href="/about/municipio"><i class="fas fa-info-circle me-2"></i> Sobre el Municipio</a></li>
                            <li><a class="dropdown-item" href="https://es.wikipedia.org/wiki/Providencia_(Nari%C3%B1o)"><i class="fas fa-book me-2"></i> Detalles Wikipedia</a></li>
                            <li><a class="dropdown-item" href="https://www.colombiaturismoweb.com/DEPARTAMENTOS/NARINO/MUNICIPIOS/PROVIDENCIA/PROVIDENCIA.htm"><i class="fas fa-blog me-2"></i> Blog</a></li>
                        </ul>
                    </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about/index') }}">
                                <i class="fas fa-info-circle me-1"></i>Acerca de
                            </a>

                            <style>
                                .nav-link {
                                    color: white !important; /* Asegura que el color blanco tenga prioridad */
                                }
                                .nav-link i {
                                    color: white !important; /* Asegura que el color blanco tenga prioridad */
                                }
                            </style>
                        </li>
                    </ul>

                    <div class="d-flex align-items-center">
                        <!-- HTML del buscador -->
                        <form class="navbar-search me-3" id="searchForm" onsubmit="handleSearch(event)">
                            <div class="position-relative">
                                <input class="form-control" type="search" placeholder="Buscar..." 
                                    aria-label="Buscar" id="searchInput">
                                <button type="submit" class="btn search-button">
                                    <i class="fas fa-search search-icon"></i>
                                </button>
                            </div>
                        </form>

                        <!-- Contenedor para resultados -->
                        <div id="searchResults" class="search-results mt-3"></div>

                        
                        <!-- Authentication Buttons -->
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="btn btn-verde-cana">
                                        <i class="fas fa-tachometer-alt me-1"></i> Panel
                                    </a>
                                @else
                                    <div class="d-flex">
                                        <a href="{{ route('login') }}" class="btn btn-outline-dark me-2 btn-verde-cana">
                                            <i class="fas fa-sign-in-alt me-1"></i> Iniciar
                                        </a>
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="btn btn-dark btn-verde-cana">
                                                <i class="fas fa-user-plus me-1"></i> Registro
                                            </a>
                                        @endif
                                    </div>
                                @endauth
                            @endif
                    </div>
                </div>
            </div>
        </nav>
        <!-- Fin sección para todo lo referente al navbar -->
</head>

<body style="background-color: #ebf5fb ;">   

         <!-- Content -->
    <main class="flex-grow container py-5">
            <br><br>  

            <div class="welcome-section">
                <h1 class="text-center display-3 fw-bold text-dark mb-1 welcome-title">
                    Bienvenido a ProviTurismo
                </h1>
                <br>
                <p class="text-center fw-bold text-muted fs-5 welcome-text">
                🏨Conozca nuevos destinos, reconecta con la naturaleza🌟.
                </p>
            </div>
            <br><br> 

                 <!-- Sección de Video -->
            <section class="video-section">
                <video autoplay loop class="video-background" controls>
                    <source src="{{ asset('videos/ProVideo.mp4') }}" type="video/mp4">
                    <source src="{{ asset('videos/ProVideo.webm') }}" type="video/webm">
                    <source src="{{ asset('videos/ProVideo.ogv') }}" type="video/ogg">
                    Tu navegador no soporta la etiqueta de video.
                </video>
            </section>

            <br><br>  
            <div class="welcome-section">
                <h1 class="text-center display-3 fw-bold text-dark mb-1 welcome-title">
                    Descubre Providencia con ProviTurismo
                </h1>
                <br>
                <p class="text-center fw-bold text-muted fs-5 welcome-text">
                🚗Descubra la magia de la naturaleza, visitando los atractivos que ofrece Providencia🌟.
                </p>
            </div>

           
            <br>

             <!-- Sección del carrusel-->

            <div class="carousel-container" style="background-color: #d5f5e3; padding: 2rem;">
                <div id="carouselExampleCaptions" class="carousel slide carousel-enhanced" data-bs-ride="carousel" data-bs-interval="5000">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
                    </div>
                    <div class="carousel-inner custom-carousel">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/FondoProvi.jpeg') }}" class="d-block w-100" alt="Parque principal">
                            <div class="carousel-caption">
                                <h1>Parque principal y atardecer en Providencia</h1>
                                <p>La primera condición del paisaje es su capacidad de decir casi todo sin una sola palabra...</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/Cabuya.jpeg') }}" class="d-block w-100" alt="Trabajador de fique">
                            <div class="carousel-caption">
                                <h1>Trabajador de fique</h1>
                                <p>Uno de los trabajos mas tradicionales en Providencia es sacar fique...</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/provi3.jpeg') }}" class="d-block w-100" alt="Parque principal">
                            <div class="carousel-caption">
                                <h1>Parque principal de Providencia</h1>
                                <p>Conoce uno de los pueblos mas bonitos de Nariño.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/Gruta.jpeg') }}" class="d-block w-100" alt="Gruta">
                            <div class="carousel-caption">
                                <h1>Gruta barrio Lourdes</h1>
                                <p>Conoce uno de los lugares mas bonitos del municipio de Providencia Nariño.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/Bellaco.jpeg') }}" class="d-block w-100" alt="Capilla">
                            <div class="carousel-caption">
                                <h1>Capilla de la Divina Providencia salado bellaco</h1>
                                <p>Conoce uno de los lugares mas emblemáticos como lo es la capilla del salado bellaco en la vereda la Floresta</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/LaVirgen.jpeg') }}" class="d-block w-100" alt="Capilla">
                            <div class="carousel-caption">
                                <h1>Capilla de la Virgen del Rosario Vereda Santa Lucia</h1>
                                <p>Conoce uno de los lugares de más historia y mitos de Providencia</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/SaladoGrande.jpeg') }}" class="d-block w-100" alt="Capilla">
                            <div class="carousel-caption">
                                <h1>Posos de sal Salado Grande vereda el Salado</h1>
                                <p>Conoce la belleza y misterio que representan los posos de Sal En Providencia.</p>
                            </div>
                        </div>
                        
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
            </div>

            <div style="text-align: center;">
            <a href="/lugar_turistico/index" class="reserve-button">Descubre más lugares</a>
            </div>
            <br>

            </div><!-----Fin div principal---->

           
            <br>

            <!-- Sección para revisar que se puede hacer en Providencia-Nariño-->

            <h2 style="text-align: center; font-size: 30px; font-weight: bold;">¿Qué hay para hacer en Providencia Nariño?</h2>

            <div class="activities-container">
                <div class="activity-card">
                    <div class="icon-container">
                        <i class="fas fa-hiking"></i>
                    </div>
                    <h3 class="activity-title">Senderismo</h3>
                    <p class="activity-description">Rutas guiadas por paisajes naturales</p>
                    <a href="/lugar_turistico/index" class="reserve-button">Ver más</a>
                </div>

                <div class="activity-card">
                    <div class="icon-container">
                        <i class="fas fa-horse"></i>
                    </div>
                    <h3 class="activity-title">Férias y fiestas</h3>
                    <p class="activity-description">Celebraciones tradicionales como férias agropecuarias y fiestas del municipio</p>
                    <a href="/evento_cultural/index" class="reserve-button">Ver más</a>
                </div>

                <div class="activity-card">
                    <div class="icon-container">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h3 class="activity-title">Miradores y Tours Fotográficos</h3>
                    <p class="activity-description">Observa y Captura los mejores momentos</p>
                    <a href="/lugar_turistico/index" class="reserve-button">Ver más</a>
                </div>

                <div class="activity-card">
                    <div class="icon-container">
                        <i class="fas fa-futbol"></i>
                    </div>
                    <h3 class="activity-title">Actividades deportivas</h3>
                    <p class="activity-description">Participa e integrate en las actividades deportivas del municipio</p>
                    <a href="/evento_cultural/index" class="reserve-button">Ver más</a>
                </div>   

            </div>

           

            <br><br>
            <!-----Mapa---->
            <div class="map-container">
                <h2 class="map-title text-center">
                    Mapa de localización del municipio de Providencia-Nariño
                </h2>
                
                <div class="col-md-12">
                    <div class="mapa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8854609997!2d-77.60000487532982!3d1.239017998749179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2eb5b7e95c8387%3A0xa60660f1937ca9d4!2sProvidencia%2C%20Nari%C3%B1o!5e0!3m2!1ses!2sco!4v1684787351783!5m2!1ses!2sco" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                        <div class="mapa-body">
                            <h5 class="card-title">Como llegar a Providencia</h5>
                            <a href="https://www.google.com/maps/place/Providencia,+Nari%C3%B1o/@1.239018,-77.6000049,17z/data=!3m1!4b1!4m6!3m5!1s0x8e2eb5b7e95c8387:0xa60660f1937ca9d4!8m2!3d1.239018!4d-77.59743!16s%2Fm%2F02qmv3c?hl=es" class="btn btn-primary">Planea tu viaje</a>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Fin Mapa -->

            <!-- Sección para revisar los servicios de Providencia-Nariño-->
            <br><br>
            <h2 style="text-align: center; font-size: 30px; font-weight: bold;">Conoce nuestros servicios</h2>

            <br><br>

            <div class="activities-container">  

               <div class="activity-card">
                    <div class="icon-container">
                        <i class="fas fa-hotel"></i>
                    </div>
                    <h3 class="activity-title">Hoteles</h3>
                    <p class="activity-description">Los hoteles en Providencia, Nariño, ofrecen una experiencia acogedora y auténtica</p>
                    <a href="/servicios/hoteles" class="reserve-button">Ver más</a>
                </div>

                <div class="activity-card">
                    <div class="icon-container">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3 class="activity-title">Restaurantes</h3>
                    <p class="activity-description">Los restaurantes en Providencia, Nariño, ofrecen una deliciosa variedad de platos locales y tradicionales</p>
                    <a href="/servicios/restaurantes" class="reserve-button">Ver más</a>
                </div>

                <div class="activity-card">
                    <div class="icon-container">
                        <i class="fas fa-bus"></i>
                    </div>
                    <h3 class="activity-title">Transporte</h3>
                    <p class="activity-description">El transporte en Providencia, Nariño, es eficiente y accesible, con opciones que incluyen autobuses locales y servicios de camionetas</p>
                    <a href="/servicios/transporte" class="reserve-button">Ver más</a>
                </div>

            </div>

        </main> <!-- Fin parte principal -->

           

            <!--Sección de registro a noticias y novedades-->

            <section class="signup-container">
                <div class="background-pattern"></div>
                <div class="signup-content">
                    <h2 class="signup-title">¡Únete a nuestra comunidad!</h2>
                    <p class="signup-description">
                        Regístrate para compartir tus experiencias y mantenerte informado sobre las últimas novedades en Providencia, Nariño
                    </p>

                    <div class="benefits-list">
                       <div class="benefit-item" onclick="location.href='/resenas';" style="cursor: pointer;">
                            <i class="fas fa-star benefit-icon"></i>
                            <h3>Comparte Reseñas:</h3>
                            <br>
                            <p>Comparte tus experiencias y ayuda a otros viajeros</p>
                        </div>
                        <div class="benefit-item" onclick="location.href='/noticias';" style="cursor: pointer;">
                            <i class="fas fa-bell benefit-icon"></i>
                            <h3>Noticias:</h3>
                            <br>
                            <p>Informate sobre noticias, eventos y novedades.</p>
                        </div>
                        <div class="benefit-item" onclick="location.href='/servicios/servicios';" style="cursor: pointer;">
                            <i class="fas fa-user-friends service-icon"></i>
                            <h3>Ofrece un servicio:</h3>
                            <br>
                            <p>Registrate y ten la oportunidad de promocionar tu servicio a traves de ProviTurismo</p>
                        </div>
                    </div>

                    <div class="signup-form">
                        <form id="register-form">
                            <p style="font-weight: bold; color: black;">
                                <i class="fas fa-users"></i> Únete a ProviTurismo <i class="fas fa-map-marker-alt"></i>
                            </p>
                            <br>
                            <a href="/register" class="reserve-button">Registrarse</a>
                        </form>
                    </div>
                </div>
            </section>
        

    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/animations.js') }}"></script>
    <script src="{{ asset('js/buscador.js') }}"></script>
    <script src="{{ asset('js/formulario.js') }}"></script>
</body>


    <!------------ Footer -------------------->

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-info">
                <img src="{{ asset('img/LogoProviTurismo.png') }}" alt="ProviTurismo Logo" class="footer-logo">
                <br><br>
                <p>🌄Transformando el turismo con experiencias auténticas y sostenibles.</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/proviturismo"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-tiktok"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/@ProviTurismoNari%C3%B1o"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-links">
                <h4>📌Enlaces Rápidos</h4>
                <ul>
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/lugar_turistico/index">Destinos</a></li>
                    <li><a href="/servicios/servicios">Servicios</a></li>
                    <li><a href="https://municipiodeprovidencia.blogspot.com/2012/12/presentacion-guanama-chiquito.html">Blog</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>🌐Servicios</h4>
                <ul>
                    <li><a href="/evento_cultural/vista11">Tours Guiados</a></li>
                    <li><a href="/noticias">Noticias</a></li>
                    <li><a href="https://www.viajarenverano.com/providencia-narino/">Experiencias</a></li>
                    <li><a href="/about/municipio">Municipio</a></li>
                </ul>
            </div>

            

            <div class="text-center py-3 border-top border-secondary">
                <p class="mb-0">&copy; {{ date('Y') }} ProviTurismo. Todos los derechos reservados.<br/><br/><br/><b>  Versión</b> 1.0.0
                <span class="px-2">|</span>
                <i class="fas fa-clock"></i> <span id="current-time"></span></p>
            </div>

            
            <div style="margin: 1rem 0;">
                 <a href="https://wa.me/573209911620" target="_blank" style="text-decoration: none; color: #25D366;">
                    <i class="fab fa-whatsapp"></i> WhatsApp Directo
                 </a>
            </div>

            <a href="https://www.digitalocean.com/?refcode=87c26049ef2e&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.cdn.digitaloceanspaces.com/WWW/Badge%201.svg" alt="DigitalOcean Referral Badge" /></a>
        </div>
            
    </footer>
</html>