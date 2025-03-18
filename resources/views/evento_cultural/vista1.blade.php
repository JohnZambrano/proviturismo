@extends('layouts.myappActividades')

@section('content')

            <section class="main-hero" data-aos="fade-down" style="background: linear-gradient(rgba(34,139,34,0.9), rgba(34,139,34,0.7)), url('https://picsum.photos/1920/600?travel') center/cover;">
                <div class="hero-header">
                    <h1 class="main-title">Desfile de Años Viejos</h1>
                    <div class="title-decoration">
                        <div class="decoration-line"></div>
                        <div class="decoration-star">✧</div>
                        <div class="decoration-line"></div>
                    </div>
                    <div class="hero-date">
                        <i class="fas fa-calendar-star"></i>
                        <p>31 Dic - 1 Ene</p>
                    </div>
                </div>
            </section>

            <br><br>


    <!-- Sección Descripción -->
    <section id="descripcion" class="section-info" data-aos="fade-up">
        <div class="section-header">
            <h2>Una tradición llena de fuego y color</h2>
            <div class="decorative-line"></div>
        </div>
        
        <div class="info-cards">

          <div class="info-card" data-aos="flip-left">
                <i class="fas fa-hat-cowboy"></i>
                <h3>Desfile por las principales calles:</h3>
                <p>Exhibición de carrozas por las principales calles del municipio.</p>
            </div>
            
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-trophy"></i>
                <h3>Competencia entre barrios y veredas:</h3>
                <p>Premiación a la mejor carroza tradicional.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-fire-alt"></i>
                <h3>Quema simbólica:</h3>
                <p>Despedida del año con la quema de creativas figuras.</p>
            </div>
        </div>
    </section>

    <!-- Sección Actividades -->
    <section id="actividades" class="activities-section">
        <h2 data-aos="fade-right">🧑‍🎨Experiencias únicas que vivirás☀️</h2>
        
        <div class="activity-carousel">
            <!-- Carrusel con tarjetas -->
            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/añov.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Las exóticas viudas:</h4>
                    <p>Personajes tradicionales con shows humorísticos.</p>
                    <div class="icon-group">
                        <i class="fas fa-theater-masks"></i>
                        <i class="fas fa-laugh-beam"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/añov4.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Presentaciones humoristicas de las carrozas:</h4>
                    <p>Las personas del municipio de Providencia hacen una presentación
                         actuando a traves del personaje del año viejo.</p>
                    <div class="icon-group">
                        <i class="fas fa-theater-masks"></i>
                        <i class="fas fa-laugh-beam"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
                <img src="{{ asset('img_actividades/añoviejo2.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Visualización de la artesania Providenciana:</h4>
                    <p>Se aprecia la gran labor artesana de las personas Providencianas.</p>
                    <div class="icon-group">
                        <i class="fas fa-theater-masks"></i>
                        <i class="fas fa-laugh-beam"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/añov3.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Ingenio de los habitantes Providencianos:</h4>
                    <p>Puesta en escena de un guión para el personaje de año viejo.</p>
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
                "Los desfiles y presentaciones de los años viejos es algo mágico que todos deberían  vivir"
                <span>- Relata un entrevistado que ha participado del evento.</span>
            </blockquote>
        </div>
    </section>
    <br><br><br>
    @endsection