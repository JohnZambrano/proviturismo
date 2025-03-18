@extends('layouts.myappActividades')

@section('content')

            <section class="main-hero" data-aos="fade-down" style="background: linear-gradient(rgba(34,139,34,0.9), rgba(34,139,34,0.7)), url('https://picsum.photos/1920/600?travel') center/cover;">
                <div class="hero-header">
                    <h1 class="main-title">Ferias agropecuarias del municipio</h1>
                    <div class="title-decoration">
                        <div class="decoration-line"></div>
                        <div class="decoration-star">✧</div>
                        <div class="decoration-line"></div>
                    </div>
                    <div class="hero-date">
                        <i class="fas fa-calendar-star"></i>
                        <p>Jun- Jul</p>
                    </div>
                </div>
            </section>

            <br><br>


    <!-- Sección Descripción -->
    <section id="descripcion" class="section-info" data-aos="fade-up">
        <div class="section-header">
            <h2>Las Ferias Agropecuarias en Providencia son una celebración del trabajo y esfuerzo de los campesinos y ganaderos
                 que hacen crecer la comunidad. </h2>
            <div class="decorative-line"></div>
        </div>
        
        <div class="info-cards">

          <div class="info-card" data-aos="flip-left">
                <i class="fas fa-hat-cowboy"></i>
                <h3>Presentación de productos agrícolas:</h3>
                <p>Exhibición de productos agrícolas de todo tipo por parte de campesinos del municipio de Providencia.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-theater-masks"></i>
                <h3>Presentación de ejemplares animales:</h3>
                <p>Exhibición de ejemplares animales por parte de ganaderos y campesinos Providencianos.</p>
            </div>
            
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-trophy"></i>
                <h3>Concurso al mejor ejemplar y mejor próducto:</h3>
                <p>Premiación al mejor ejemplar animal y al mejor próducto agrícola.</p>
            </div>

        </div>
    </section>

    <!-- Sección Actividades -->
    <section id="actividades" class="activities-section">
        <h2 data-aos="fade-right">🎠Experiencias únicas que vivirás☀️</h2>
         <!-- Carrusel con tarjetas -->
        <div class="activity-carousel">
           
            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/f5.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Presentación de productos agrícoas:</h4>
                    <p>Exhibición de productos agrícolas de todo tipo.</p>
                    <div class="icon-group">
                        <i class="fas fa-theater-masks"></i>
                        <i class="fas fa-laugh-beam"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/f6.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Presentación de productos agrícoas:</h4>
                    <p>Exhibición de productos agrícolas de todo tipo.</p>
                    <div class="icon-group">
                        <i class="fas fa-theater-masks"></i>
                        <i class="fas fa-laugh-beam"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/f2.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Presentación de ejemplares animales:</h4>
                    <p>Exhibición de ejemplares animales por parte de ganaderos y campesinos Providencianos.</p>
                    <div class="icon-group">
                        <i class="fas fa-theater-masks"></i>
                        <i class="fas fa-laugh-beam"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/f8.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Presentación de ejemplares animales:</h4>
                    <p>Exhibición de ejemplares animales por parte de ganaderos y campesinos Providencianos.</p>
                    <div class="icon-group">
                        <i class="fas fa-theater-masks"></i>
                        <i class="fas fa-laugh-beam"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/f1.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Carrera de caballos:</h4>
                    <p>Emocionantes carreras de caballos en diferentes categorías .</p>
                    <div class="icon-group">
                        <i class="fas fa-theater-masks"></i>
                        <i class="fas fa-laugh-beam"></i>
                    </div>
                </div>
            </div>
              

            <div class="activity-card" data-aos="zoom-in">
                <img src="{{ asset('img_actividades/fi2.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Presentaciones musicales:</h4>
                    <p>Presentaciones musicales de grupos de música campesina, bailable y popular.</p>
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
                <li><i class="fas fa-dollar-sign icono-dinero"></i> Llevar dinero para degustar de ventas y productos ofrecidos.</li>
                <li><i class="fas fa-map-marked-alt"></i> Ubicación estratégica</li>
            </ul>
            <blockquote>
                "Las ferias agropecuarias en el municipio de Providencia es algo que todos deberían  vivir"
                <span>- Relata un entrevistado que ha participado del evento.</span>
            </blockquote>
        </div>
    </section>

    <br><br><br>
    @endsection 