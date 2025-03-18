@extends('layouts.myappActividades')

@section('content')

            <section class="main-hero" data-aos="fade-down" style="background: linear-gradient(rgba(34,139,34,0.9), rgba(34,139,34,0.7)), url('https://picsum.photos/1920/600?travel') center/cover;">
                <div class="hero-header">
                    <h1 class="main-title">Campeonatos de verano</h1>
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
            <h2>El deporte es la chispa que mueve comunidades</h2>
            <div class="decorative-line"></div>
        </div>
        
        <div class="info-cards">

          <div class="info-card" data-aos="flip-left">
                <i class="fas fa-futbol"></i>
                <h3>Encuentros deportivos en varias modalidades:</h3>
                <p>Competición de los diferentes equipos por cada modalidad en las canchas del municipio.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-volleyball"></i>
                <h3>Modalidades y categorías:</h3>
                <p>Se realizan campeonatos de microfútbol, fútbol, baloncesto y voleibol en categorías libre y aficionados.</p>
            </div>
            
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-trophy"></i>
                <h3>Torneos entre barrios y veredas:</h3>
                <p>Premiación al mejor equipo de cada categoría</p>
            </div>

        </div>
    </section>

    <!-- Sección Actividades -->
    <section id="actividades" class="activities-section">
        <h2 data-aos="fade-right">⚽Experiencias únicas que vivirás🏐</h2>
        
        <div class="activity-carousel">
            <!-- Carrusel con tarjetas -->
            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/fut.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Torneo de fútbol:</h4>
                    <p>Fútbol: Es un deporte de equipo jugado entre dos conjuntos de once jugadores cada uno. 
                        El objetivo es marcar goles introduciendo el balón en la portería contraria.</p>
                    <div class="icon-group">
                        <i class="fas fa-futbol"></i>
                        <i class="fas fa-basketball-ball"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/bask.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Torneo Baloncesto:</h4>
                    <p>Baloncesto: Dos equipos de cinco jugadores compiten para anotar puntos lanzando 
                        una pelota a través de un aro elevado. Es conocido por su dinamismo y jugadas espectaculares.</p>
                    <div class="icon-group">
                    <i class="fas fa-futbol"></i>
                    <i class="fas fa-basketball-ball"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/cromi.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Torneo de microfútbol masculino:</h4>
                    <p>Microfútbol: Similar al fútbol, pero jugado en una cancha 
                        más pequeña y con equipos de cinco jugadores.
                         Es rápido y requiere gran habilidad técnica.</p>
                    <div class="icon-group">
                    <i class="fas fa-futbol"></i>
                    <i class="fas fa-basketball-ball"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
                <img src="{{ asset('img_actividades/parq.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Torneo Voleibol masculino:</h4>
                    <p>Voleibol: Se juega entre dos equipos de seis jugadores en una cancha dividida por una red.
                         El objetivo es pasar el balón por encima de la red y que toque el suelo del campo contrario.</p>
                    <div class="icon-group">
                    <i class="fas fa-futbol"></i>
                    <i class="fas fa-basketball-ball"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/micro.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Torneo de microfútbol masculino:</h4>
                    <p>Microfútbol: Similar al fútbol, pero jugado en una cancha 
                        más pequeña y con equipos de cinco jugadores.
                         Es rápido y requiere gran habilidad técnica.</p>
                    <div class="icon-group">
                    <i class="fas fa-futbol"></i>
                    <i class="fas fa-basketball-ball"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/deporte.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Torneo de microfutbol femenino:</h4>
                    <p>Microfútbol: Similar al fútbol, pero jugado en una cancha más pequeña y con equipos de cinco jugadores.
                         Es rápido y requiere gran habilidad técnica..</p>
                    <div class="icon-group">
                    <i class="fas fa-futbol"></i>
                    <i class="fas fa-basketball-ball"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/voley.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Torneo de voleibol femenino</h4>
                    <p>Voleibol: Se juega entre dos equipos de seis jugadores en una cancha dividida por una red.
                    El objetivo es pasar el balón por encima de la red y que toque el suelo del campo contrario.</p>
                    <div class="icon-group">
                    <i class="fas fa-futbol"></i>
                    <i class="fas fa-basketball-ball"></i>
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
                <li><i class="fas fa-clock"></i>Inscribirse con un equipo</li>
                <li><i class="fas fa-tshirt"></i> Ropa cómoda</li>
                <li><i class="fas fa-map-marked-alt"></i> Ubicación estratégica para ver los encuentros</li>
            </ul>
            <blockquote>
                "Los campeonatos de verano son espacios que unen a las comunidades y además ayuda a la sana diversión"
                <span>- Relata un entrevistado que ha participado del evento.</span>
            </blockquote>
        </div>
    </section>
    <br><br><br>
    @endsection 