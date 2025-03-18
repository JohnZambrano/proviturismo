
@extends('layouts.myappLugares')

@section('content')

            <section class="main-hero" data-aos="fade-down" style="background: linear-gradient(rgba(34,139,34,0.9), rgba(34,139,34,0.7)), url('https://picsum.photos/1920/600?travel') center/cover;">
                <div class="hero-header">
                    <h1 class="main-title">🏕️Cueva vereda La Floresta🗺️</h1>
                    <div class="title-decoration">
                        <div class="decoration-line"></div>
                        <div class="decoration-star">✧</div>
                        <div class="decoration-line"></div>
                    </div>
                    <p class="hero-subtitle">Explora la belleza natural y disfruta de actividades ecoturísticas únicas</p>
                </div>
            </section>
             <br><br>
             
    
    

    <!-- Sección Descripción -->
    <section id="descripcion" class="section-info" data-aos="fade-up">
        <div class="section-header">
            <h2>🌍Conoce sobre el lugar🚶</h2>
            <div class="decorative-line"></div>
        </div>
        
        <div class="info-cards">

          <div class="info-card" data-aos="flip-left">
                <i class="fas fa-mountain"></i>
                <h3> Misterio y leyendas:</h3>
                <p> La Cueva de la vereda La Floresta
                     está llena de misterio y leyendas, profundamente conectada con la historia de Providencia,
                     Nariño. Las historias de riquezas escondidas y tumbas indígenas han perdurado a lo largo del tiempo.</p>
            </div>
            
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-road"></i>
                <h3>Accesibilidad:</h3>
                <p> Llegar a la cueva es fácil, ya que está ubicada a solo un kilómetro del municipio.
                     El camino es corto y agradable, rodeado de naturaleza, ideal para 
                     una caminata accesible para locales y turistas.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-camera"></i>
                <h3>Exploración arqueológica:</h3>
                <p> La cueva es un destino ideal para la observación arqueológica y la exploración ligera.
                     Se han encontrado vestigios de antiguas tumbas indígenas, como ollas de barro y herramientas de piedra.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-monument"></i>
                <h3>Leyenda del "mamón":</h3>
                <p> La cueva es conocida por la leyenda del "mamón", un animal 
                    mítico que enfermaba a las vacas blancas al beber su leche durante
                     la noche, añadiendo un aura de misterio al lugar.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-sun"></i>
                <h3>Historia y batallas:</h3>
                <p> La cueva está relacionada con las leyendas y la historia local, 
                    siendo testigo de enfrentamientos entre indígenas y coloniales. Se cree que sirvió 
                    como trinchera en las batallas.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-hiking"></i>
                <h3>Recomendaciones para visitantes:</h3>
                <p> Es fundamental respetar el entorno natural y el legado cultural de la cueva.
                     Se recomienda ir acompañado de un guía local, llevar linternas y ropa adecuada para la caminata.</p>
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
               <img src="{{ asset('img_lugares/cu3.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Entrada de la cueva: </h4>
                    <p> La entrada de la misteriosa Cueva de la vereda La Floresta.</p>
                    <div class="icon-group">
                        <i class="fas fa-hiking"></i>
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/cu5.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Entrada de la cueva: </h4>
                    <p> La entrada de la misteriosa Cueva de la vereda La Floresta.</p>
                    <div class="icon-group">
                        <i class="fas fa-hiking"></i>
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/ma.jpg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Leyenda del "mamón":</h4>
                    <p>  Representación del mítico "mamón" rondando la cueva.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/cu2.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Camino a la cueva: </h4>
                    <p> Sendero natural que lleva a la cueva, rodeado de vegetación.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
                <img src="{{ asset('img_actividades/m1.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Vestigios arqueológicos:</h4>
                    <p>  Ollas de barro y herramientas de piedra encontradas cerca de la cueva.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/cu6.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Historia local: </h4>
                    <p> Relatos de enfrentamientos entre indígenas y coloniales en la cueva.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/cu4.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Exploración segura:</h4>
                    <p> Visitantes explorando la cueva con linternas y equipo adecuado.</p>
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
                <li><i class="fas fa-clock"></i> Iniciar temprano</li>
                <li><i class="fas fa-tshirt"></i> Ropa cómoda</li>
                <li><i class="fas fa-map-marked-alt"></i> Utilizar Google Maps</li>
            </ul>
            <blockquote>
                "La Cueva en la vereda La Floresta es un lugar que combina naturaleza,
                 historia y mitología, ofreciendo una experiencia inolvidable.
                  Su importancia arqueológica y cultural, junto con las leyendas que la rodean, 
                  la convierten en un sitio único en la memoria de Providencia."
                <span>- Relata un entrevistado que ha participado del evento.</span>
            </blockquote>
        </div>
    </section>
    @endsection
