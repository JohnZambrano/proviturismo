@extends('layouts.myappActividades')

@section('content')

            <section class="main-hero" data-aos="fade-down" style="background: linear-gradient(rgba(34,139,34,0.9), rgba(34,139,34,0.7)), url('https://picsum.photos/1920/600?travel') center/cover;">
                <div class="hero-header">
                    <h1 class="main-title">Motociclismo en el municipio de Providencia</h1>
                    <div class="title-decoration">
                        <div class="decoration-line"></div>
                        <div class="decoration-star">✧</div>
                        <div class="decoration-line"></div>
                    </div>
                    <div class="hero-date">
                        <i class="fas fa-calendar-star"></i>
                        <p>Prácticalo</p>
                    </div>
                </div>
            </section>

            <br><br>


          <section class="video-section">
                <div class="video-container">
                <video autoplay loop muted playsinline class="video-background" controls>
                        <!-- Corregir el type del primer video de "video/m4" a "video/mp4" -->
                        <source src="{{ asset('videos/motos.mp4') }}" type="video/mp4">
                        <source src="{{ asset('videos/motos.webm') }}" type="video/webm">
                        <source src="{{ asset('videos/motos.ogv') }}" type="video/ogg">
                        Tu navegador no soporta la etiqueta de video.
                    </video>
                </div>
            </section>

    <!-- Sección Descripción -->
    <section id="descripcion" class="section-info" data-aos="fade-up">
        <div class="section-header">
            <h2>El motociclismo es una pasión que despierta emociones intensas y
                 una sensación de libertad incomparable.</h2>
            <div class="decorative-line"></div>
        </div>
        
        <div class="info-cards">

          <div class="info-card" data-aos="flip-left">
                <i class="fas fa-motorcycle"></i>
                <h3>Motociclismo en Providencia:</h3>
                <p> Es una actividad emocionante y popular, especialmente entre
                     los hombres y de a poco en las mujeres tambien.
                     La pista Briceño Racing en la vereda Floresta, asi como otros escenarios 
                     han sido clave para su crecimiento.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-flag-checkered"></i>
                <h3>Competiciones en diferentes escenarios:</h3>
                <p>Las carreras se realizan en escenarios de veredas, en la pista Briceño Racing y en las calles del municipio.</p>
            </div>
            
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-trophy"></i>
                <h3>Premiaciones por cada categoría realizada:</h3>
                <p>Premiación para los mejores pilotos de cada categoría.</p>
            </div>

        </div>
    </section>

    <!-- Sección Actividades -->
    <section id="actividades" class="activities-section">
        <h2 data-aos="fade-right">🏍️Experiencias únicas que vivirás 🏁</h2>
        
        <div class="activity-carousel">
            <!-- Carrusel con tarjetas -->
            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/mts5.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Motociclismo en Providencia: </h4>
                    <p>Es una actividad emocionante y popular, especialmente entre los hombres. 
                        La pista Briceño Racing en la vereda La Floresta ha sido clave para su crecimiento.</p>
                    <div class="icon-group">
                    <i class="fas fa-flag-checkered"></i>
                    <i class="fas fa-motorcycle"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/mt9.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Fechas y lugares de actividades:</h4>
                    <p> Las competencias se realizan en fechas variables, las cuales se realizan principalmente en las calles del municipio, en la pista Briceño 
                        Racing y en veredas como San Francisco, La Folresta y Guadrahuma, especialmente durante festividades locales.</p>
                    <div class="icon-group">
                    <i class="fas fa-flag-checkered"></i>
                    <i class="fas fa-motorcycle"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/mts3.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Eventos especiales:</h4>
                    <p> Durante las fiestas del Divino Niño y San Sebastián, las competencias 
                        de motociclismo atraen a muchas personas, 
                        tanto locales como de municipios cercanos.</p>
                    <div class="icon-group">
                    <i class="fas fa-flag-checkered"></i>
                    <i class="fas fa-motorcycle"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
                <img src="{{ asset('img_actividades/mt5.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Dinámica del motociclismo:</h4>
                    <p>La pista Briceño Racing es un lugar donde tanto principiantes como expertos pueden 
                        mejorar sus habilidades, atrayendo a motociclistas de otros municipios.</p>
                    <div class="icon-group">
                    <i class="fas fa-flag-checkered"></i>
                    <i class="fas fa-motorcycle"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/mt7.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Impacto cultural:</h4>
                    <p> El motociclismo une a la comunidad de Providencia, convirtiéndose en una 
                        actividad que fomenta la convivencia y el turismo local.</p>
                    <div class="icon-group">
                    <i class="fas fa-flag-checkered"></i>
                    <i class="fas fa-motorcycle"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/mt2.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Impacto económico:</h4>
                    <p>Impacto económico: Los eventos de motociclismo impulsan la economía local, con ventas de comida y productos 
                        relacionados durante los fines de semana y festividades.</p>
                    <div class="icon-group">
                    <i class="fas fa-flag-checkered"></i>
                    <i class="fas fa-motorcycle"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/mt3.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Recomendaciones para visitantes:</h4>
                    <p>Es ideal visitar la pista Briceño Racing los fines de semana o en fechas especiales, y siempre 
                        llevar el equipo adecuado para practicar de manera segura.</p>
                    <div class="icon-group">
                        <i class="fas fa-flag-checkered"></i>
                        <i class="fas fa-motorcycle"></i>
                    </div>
                </div>
            </div>
            
            <!-- Más tarjetas de actividades -->
        </div>

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
                <li><i class="fas fa-clock"></i> Llegar temprano</li>
                <li><i class="fas fa-tshirt"></i> Ropa cómoda</li>
                <li><i class="fas fa-map-marked-alt"></i> Ubicación estratégica</li>
            </ul>
            <blockquote>
                "El motociclismo en Providencia es más que un deporte; es una parte 
                integral de la cultura local que une a la comunidad y atrae a visitantes, 
                beneficiando la economía y ofreciendo una actividad emocionante."
                <span>- Relata un entrevistado que ha participado del evento.</span>
            </blockquote>
        </div>
    </section>

    <br><br><br>
    @endsection 