
@extends('layouts.myappLugares')

@section('content')

            <section class="main-hero" data-aos="fade-down" style="background: linear-gradient(rgba(34,139,34,0.9), rgba(34,139,34,0.7)), url('https://picsum.photos/1920/600?travel') center/cover;">
                <div class="hero-header">
                    <h1 class="main-title">🏕️ Pista Briceño Racing🗺️</h1>
                    <div class="title-decoration">
                        <div class="decoration-line"></div>
                        <div class="decoration-star">✧</div>
                        <div class="decoration-line"></div>
                    </div>
                    <p class="hero-subtitle">Explora la belleza natural y disfruta de actividades ecoturísticas únicas</p>
                </div>
            </section>
             <br><br>
          <!-- Sección de Video -->
            <section class="video-section">
                <div class="video-container">
                <video autoplay loop muted playsinline class="video-background" controls>
                        <!-- Corregir el type del primer video de "video/m4" a "video/mp4" -->
                        <source src="{{ asset('videos/bri.mp4') }}" type="video/mp4">
                        <source src="{{ asset('videos/bri.webm') }}" type="video/webm">
                        <source src="{{ asset('videos/bri.ogv') }}" type="video/ogg">
                        Tu navegador no soporta la etiqueta de video.
                    </video>
                </div>
            </section>
       
           
    

    <!-- Sección Descripción -->
    <section id="descripcion" class="section-info" data-aos="fade-up">
        <div class="section-header">
            <h2>🌍Conoce sobre el lugar🚶</h2>
            <div class="decorative-line"></div>
        </div>
        
        <div class="info-cards">

          <div class="info-card" data-aos="flip-left">
                <i class="fas fa-map-marked-alt"></i>
                <h3>Ubicación y atractivo:</h3>
                <p> La Pista Briceño Racing, en la vereda La Floresta de Providencia, es conocida 
                    por ser un espacio único para los amantes del motociclismo y la adrenalina.</p>
            </div>
            
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-road"></i>
                <h3>Accesibilidad:</h3>
                <p> La pista es fácilmente accesible desde el centro del municipio, a solo 3 
                    minutos en vehículo o 10 minutos caminando, ubicada a orilla de carretera.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-camera"></i>
                <h3>Experiencia única: </h3>
                <p> La pista ofrece una experiencia emocionante y diferente,
                     siendo un punto de referencia para el motociclismo y el turismo deportivo en Providencia.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-monument"></i>
                <h3>Historia:</h3>
                <p> Creada por entusiastas del motociclismo, la pista ha evolucionado con el tiempo,
                     convirtiéndose en uno de los mejores circuitos de la región.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-sun"></i>
                <h3>Actividades y competencias: </h3>
                <p> Ofrece diversas opciones para disfrutar del motociclismo,
                     con carreras en festividades y fines de semana, atrayendo a pilotos locales y regionales.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-hiking"></i>
                <h3>Recomendaciones para visitantes:</h3>
                <p> Se aconseja llevar ropa cómoda y deportiva, seguir las instrucciones de seguridad y evitar llevar niños
                     pequeños durante las competencias debido al ruido y la velocidad.</p>
            </div>
        </div>
    </section>

         <!-- Sección de Horarios y Rutas -->
     <section class="rutas-section" id="rutas">
        <h2 style="text-align: center; color: var(--primary); margin-bottom: 2rem;">Mapa de localización del municipio de Providencia-Nariño</h2>
        
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63795.45603278168!2d-77.4835976!3d1.5564694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e29943234a82c37%3A0x60f5d84d79b4d4d7!2sProvidencia%2C%20Nari%C3%B1o!5e0!3m2!1ses!2sco!4v1718507271719!5m2!1ses!2sco" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
            </iframe>
        </div>

       
    </section>


    <!-- Sección Actividades -->
    <section id="actividades" class="activities-section">
        <h2 data-aos="fade-right">🌿Experiencias únicas que vivirás🌄</h2>
        
        <div class="activity-carousel">
            <!-- Carrusel con tarjetas -->
            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img/BriceñoRacing.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Vista Aérea de la Pista:</h4>
                    <p>  Una vista aérea del circuito, mostrando su trazado desafiante.</p>
                    <div class="icon-group">
                        <i class="fas fa-hiking"></i>
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/mt5.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Competencia en Acción:</h4>
                    <p>  Pilotos compitiendo en una carrera, disfrutando de la velocidad y la adrenalina.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/mts1.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Entrada Principal:</h4>
                    <p>  La entrada a la Pista Briceño Racing, fácilmente accesible desde la carretera.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
                <img src="{{ asset('img_actividades/mt3.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Pilotos Entrenando: </h4>
                    <p> Pilotos locales y visitantes entrenando en la pista durante el fin de semana.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/pista.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4> Vista desde el Circuito:</h4>
                    <p> Espectaculares vistas desde cualquier punto del circuito, rodeado de naturaleza.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/mts2.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Evento de Competencia: </h4>
                    <p> Un evento de competencia de motos velo arena, atrayendo a pilotos y espectadores.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            
            
            <!-- Más tarjetas de actividades -->
        </div>

        <br><br>


        <div class="review-container">
            <a href="{{ route('resenas.create') }}" class="review-btn" onclick="showRating()" >
                <span>⭐ Dejar Reseña</span>
            </a>
        </div>


            <div class="overlay" onclick="closeRating()"></div>

            <div class="rating-container">
                <h3>Califica tu experiencia</h3>
                <div class="stars">
                    <div class="star" onclick="rate(1)">★</div>
                    <div class="star" onclick="rate(2)">★</div>
                    <div class="star" onclick="rate(3)">★</div>
                    <div class="star" onclick="rate(4)">★</div>
                    <div class="star" onclick="rate(5)">★</div>
                </div>
            </div>

    </section>

    <!-- Sección Recomendaciones -->
    <section id="recomendaciones" class="recommendations" data-aos="fade-up">
        <div class="recommendation-box">
            <i class="fas fa-lightbulb"></i>
            <h3>Consejos prácticos:</h3>
            <ul class="tips-list">
                <li><i class="fas fa-map-marked-alt"></i> Ubicación estratégica</li>
                <li><i class="fas fa-tshirt"></i> Ropa cómoda</li>
                <li><i class="fas fa-first-aid"></i> Tener cuidado durante el evento</li>
            </ul>
            <blockquote>
                "La Pista Briceño Racing es un destino clave en Providencia para quienes buscan emoción 
                y adrenalina. Con su infraestructura desafiante, atrae tanto a locales como a turistas, 
                consolidándose como un importante punto de referencia para el motociclismo en la región."
                <span>- Relata un entrevistado que ha participado del evento.</span>
            </blockquote>
        </div>
    </section>
    @endsection
