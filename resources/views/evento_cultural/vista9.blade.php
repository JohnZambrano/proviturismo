@extends('layouts.myappActividades')

@section('content')

            <section class="main-hero" data-aos="fade-down" style="background: linear-gradient(rgba(34,139,34,0.9), rgba(34,139,34,0.7)), url('https://picsum.photos/1920/600?travel') center/cover;">
                <div class="hero-header">
                    <h1 class="main-title">Novenas de Navidad en Providencia</h1>
                    <div class="title-decoration">
                        <div class="decoration-line"></div>
                        <div class="decoration-star">✧</div>
                        <div class="decoration-line"></div>
                    </div>
                    <div class="hero-date">
                        <i class="fas fa-calendar-star"></i>
                        <p>Diciembre</p>
                    </div>
                </div>
            </section>

            <br><br>

    <!-- Sección Descripción -->
    <section id="descripcion" class="section-info" data-aos="fade-up">
        <div class="section-header">
            <h2>Una celebración llena de actividades sorprendentes</h2>
            <div class="decorative-line"></div>
        </div>
        
        <div class="info-cards">

          <div class="info-card" data-aos="flip-left">
                <i class="fas fa-church"></i>
                <h3>Importancia cultural:</h3>
                <p>Las novenas de Navidad en Providencia son una
                     actividad cultural clave que fortalece los lazos entre familias y
                     comunidades, reuniendo a vecinos para rezar y cantar villancicos.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-fire"></i>
                <h3>Fechas y lugares: </h3>
                <p>Se celebran del 16 al 24 de diciembre en veredas rurales 
                    y barrios urbanos, con actividades organizadas en
                     espacios comunitarios o hogares, fomentando la hospitalidad y convivencia.</p>
            </div>
            
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-flag"></i>
                <h3>Contenido de las novenas:</h3>
                <p> Las novenas incluyen rezos diarios, cánticos tradicionales y representaciones
                     del pesebre viviente, con niños disfrazados de personajes de la Sagrada Familia.</p>
            </div>

        </div>
    </section>

    <!-- Sección Actividades -->
    <section id="actividades" class="activities-section">
        <h2 data-aos="fade-right">🎄Experiencias únicas que vivirás☀️</h2>
        
        <div class="activity-carousel">
            <!-- Carrusel con tarjetas -->
            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/parro2.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Importancia cultural:</h4>
                    <p>  Las novenas de Navidad en Providencia son una actividad cultural clave que fortalece 
                        los lazos entre familias y comunidades, reuniendo a vecinos para rezar y cantar villancicos.</p>
                    <div class="icon-group">
                        <i class="fas fa-church"></i>
                        <i class="fas fa-laugh-beam"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/nov3.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Fechas y lugares:  </h4>
                    <p>Se celebran del 16 al 24 de diciembre en veredas rurales y barrios urbanos, con actividades organizadas
                         en espacios comunitarios o hogares, fomentando la hospitalidad y convivencia.</p>
                    <div class="icon-group">
                    <i class="fas fa-church"></i>
                    <i class="fas fa-laugh-beam"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/nov2.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Contenido de las novenas:  </h4>
                    <p>Las novenas incluyen rezos diarios, cánticos tradicionales y representaciones 
                        del pesebre viviente, con niños disfrazados de personajes de la Sagrada Familia.</p>
                    <div class="icon-group">
                    <i class="fas fa-church"></i>
                    <i class="fas fa-laugh-beam"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
                <img src="{{ asset('img_actividades/nov1.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Experiencia única:</h4>
                    <p> Los visitantes pueden disfrutar de un ambiente festivo y acogedor, participando en eventosen eventos 
                    culturales y festivos que ofrecen una experiencia inolvidable y enriquecedora.</p>
                    <div class="icon-group">
                    <i class="fas fa-church"></i>
                    <i class="fas fa-laugh-beam"></i>
                    </div>
                </div>
            </div>


            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/pastores.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Recomendaciones para visitantes:</h4>
                    <p>  Se recomienda unirse a las actividades comunitarias con respeto hacia las tradiciones religiosas
                         y disposición para compartir, disfrutando de una Navidad cercana y significativa.</p>
                    <div class="icon-group">
                    <i class="fas fa-church"></i>
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
                <li><i class="fas fa-flag"></i> Mostrar respeto hacia las tradiciones religiosas.</li>
                <li><i class="fas fa-map-marked-alt"></i> Ubicación estratégica</li>
            </ul>
            <blockquote>" Las novenas municipales y por sectores en Providencia son una tradición 
                que va más allá de lo religioso, promoviendo la unión y celebración comunitaria."
                <span>- Relata un entrevistado que ha participado del evento.</span>
            </blockquote>
        </div>
    </section>

    <br><br><br>
    @endsection 

   