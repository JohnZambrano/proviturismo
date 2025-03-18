@extends('layouts.myappActividades')

@section('content')

            <section class="main-hero" data-aos="fade-down" style="background: linear-gradient(rgba(34,139,34,0.9), rgba(34,139,34,0.7)), url('https://picsum.photos/1920/600?travel') center/cover;">
                <div class="hero-header">
                    <h1 class="main-title">Carnaval de negros y blancos</h1>
                    <div class="title-decoration">
                        <div class="decoration-line"></div>
                        <div class="decoration-star">✧</div>
                        <div class="decoration-line"></div>
                    </div>
                    <div class="hero-date">
                        <i class="fas fa-calendar-star"></i>
                        <p>3 Ene- 6 Ene</p>
                    </div>
                </div>
            </section>

            <br><br>


     <!-- Sección de Video -->
     <section class="video-section">
                <div class="video-container">
                <video autoplay loop muted playsinline class="video-background" controls>
                        <!-- Corregir el type del primer video de "video/m4" a "video/mp4" -->
                        <source src="{{ asset('videos/carnaval.mp4') }}" type="video/mp4">
                        <source src="{{ asset('videos/carnaval.webm') }}" type="video/webm">
                        <source src="{{ asset('videos/carnaval.ogv') }}" type="video/ogg">
                        Tu navegador no soporta la etiqueta de video.
                    </video>
                </div>
            </section>

    <!-- Sección Descripción -->
    <section id="descripcion" class="section-info" data-aos="fade-up">
        <div class="section-header">
            <h2>Una tradición llena de folclor y color</h2>
            <div class="decorative-line"></div>
        </div>
        
        <div class="info-cards">

          <div class="info-card" data-aos="flip-left">
                <i class="fas fa-hat-cowboy"></i>
                <h3>Desfile por las principales calles:</h3>
                <p>Exhibición de carrozas por las principales calles del municipio compañadas por danzas.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-theater-masks"></i>
                <h3>Presentación de danzas y carrozas:</h3>
                <p>Presentaciones de las diferentes danzas y carrozas de barrios y veredas en el parque principal del municipio.</p>
            </div>
            
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-trophy"></i>
                <h3>Competencia entre barrios y veredas:</h3>
                <p>Premiación a la mejor carroza tradicional y los mejores danzantes</p>
            </div>

        </div>
    </section>

    <!-- Sección Actividades -->
    <section id="actividades" class="activities-section">
        <h2 data-aos="fade-right">🎭Experiencias únicas que vivirás☀️</h2>
        
        <div class="activity-carousel">
            <!-- Carrusel con tarjetas -->
            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/mayores.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Carnaval del adulto mayor:</h4>
                    <p>Presentacion de comparsas por adultos mayores de barrios y veredas día 3 de enero.</p>
                    <div class="icon-group">
                        <i class="fas fa-theater-masks"></i>
                        <i class="fas fa-laugh-beam"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/nenes.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Carnaval de niños carnavalito:</h4>
                    <p>Presentaciones de comparsas por niños de barrios y veredas día 4 de enero.</p>
                    <div class="icon-group">
                        <i class="fas fa-theater-masks"></i>
                        <i class="fas fa-laugh-beam"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/nenes3.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Carnaval de niños carnavalito:</h4>
                    <p>Presentaciones de comparsas por niños de barrios y veredas día 4 de enero.</p>
                    <div class="icon-group">
                        <i class="fas fa-theater-masks"></i>
                        <i class="fas fa-laugh-beam"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
                <img src="{{ asset('img_actividades/negro.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Carnaval de negros:</h4>
                    <p>Presentación fonominica sobre las familias tradicionales de Providencia día 5 de enero.</p>
                    <div class="icon-group">
                        <i class="fas fa-theater-masks"></i>
                        <i class="fas fa-laugh-beam"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/carroza.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Carnaval de blancos y negros:</h4>
                    <p>Presentación de carrozas y comparsas día 6 de enero.</p>
                    <div class="icon-group">
                        <i class="fas fa-theater-masks"></i>
                        <i class="fas fa-laugh-beam"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/carroza1.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Carnaval de blancos y negros:</h4>
                    <p>Presentación de carrozas y comparsas día 6 de enero.</p>
                    <div class="icon-group">
                        <i class="fas fa-theater-masks"></i>
                        <i class="fas fa-laugh-beam"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/re.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Carnaval de blancos y negros:</h4>
                    <p>Presentación de carrozas y comparsas día 6 de enero.</p>
                    <div class="icon-group">
                        <i class="fas fa-theater-masks"></i>
                        <i class="fas fa-laugh-beam"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/diablo.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Carnaval de blancos y negros:</h4>
                    <p>Presentación de carrozas y comparsas día 6 de enero.</p>
                    <div class="icon-group">
                        <i class="fas fa-theater-masks"></i>
                        <i class="fas fa-laugh-beam"></i>
                    </div>
                </div>
            </div>
            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/ranche.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Carnaval de blancos y negros:</h4>
                    <p>Presentación de carrozas y comparsas día 6 de enero.</p>
                    <div class="icon-group">
                        <i class="fas fa-theater-masks"></i>
                        <i class="fas fa-laugh-beam"></i>
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
                "Los desfiles de carrozas y presentaciones del carnaval de negros y blancos es algo que todos deberían  vivir"
                <span>- Relata un entrevistado que ha participado del evento.</span>
            </blockquote>
        </div>
    </section>

    <br><br><br>
    @endsection 