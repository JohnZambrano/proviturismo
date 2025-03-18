
@extends('layouts.myappLugares')

@section('content')

            <section class="main-hero" data-aos="fade-down" style="background: linear-gradient(rgba(34,139,34,0.9), rgba(34,139,34,0.7)), url('https://picsum.photos/1920/600?travel') center/cover;">
                <div class="hero-header">
                    <h1 class="main-title">🏕️Capilla Virgen de las Lajas en la vereda Santa Lucía🗺️</h1>
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
                        <source src="{{ asset('videos/vi2.mp4') }}" type="video/mp4">
                        <source src="{{ asset('videos/vi2.webm') }}" type="video/webm">
                        <source src="{{ asset('videos/vi2.ogv') }}" type="video/ogg">
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
                <p> La Capilla de la Virgen de las Lajas está en la vereda Santa Lucía, a poco más
                     de una hora a pie desde el centro del pueblo, con acceso más corto
                      en moto o carro por un camino empinado. </p>
            </div>
            
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-road"></i>
                <h3>Accesibilidad:</h3>
                <p> Llegar a la capilla de Santa Lucia es fácil desde el centro de Providencia,
                     ya que se puede llegar en automovil en 30 minutos por caminos en buen estado.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-camera"></i>
                <h3>Belleza natural y cultural: </h3>
                <p>La capilla ofrece una impresionante vista panorámica de las montañas y la vegetación,
                     actuando como un mirador natural ideal para la contemplación del paisaje.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-monument"></i>
                <h3>Atractivo natural cercano: </h3>
                <p> Cerca de la capilla se encuentra la cascada "La Paila Mocha", una caída de agua
                     profunda que añade valor turístico al lugar, aunque se recomienda precaución al visitarla.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-sun"></i>
                <h3>Historia y creencias:</h3>
                <p>  La imagen de la Virgen de las Lajas fue colocada en la capilla para proteger a 
                    los viajeros de apariciones y tentaciones, convirtiendo el lugar en un espacio de protección espiritual.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-hiking"></i>
                <h3>Recomendaciones para visitantes:</h3>
                <p>  Se aconseja llevar provisiones y ropa adecuada para el clima, y tener precaución al 
                    explorar la cascada debido a la profundidad del pozo.p>
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
               <img src="{{ asset('img_lugares/vi4.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Capilla de la Virgen de las Lajas:</h4>
                    <p>  Una capilla pintoresca situada al borde de la carretera en Santa Lucía.</p>
                    <div class="icon-group">
                        <i class="fas fa-hiking"></i>
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/vi3.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Vista Panorámica desde la Capilla:</h4>
                    <p>  Una impresionante vista de las montañas y la vegetación desde la capilla.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/vi1.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Camino hacia la Capilla:</h4>
                    <p>  Un camino empinado y resbaloso que lleva a la capilla, ideal para caminatas.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
                <img src="{{ asset('img_lugares/vi5.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Cascada La Paila Mocha: </h4>
                    <p> Una profunda caída de agua cercana a la capilla, recomendada con precaución.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/vi6.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Mirador Natural:</h4>
                    <p>  La capilla actúa como un mirador natural, ofreciendo vistas espectaculares del paisaje.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/nov3.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Festividad Anual:</h4>
                    <p> La comunidad celebra una festividad en honor a la Virgen, atrayendo a visitantes de diversas localidades.</p>
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
                "La Capilla de la Virgen de las Lajas en Santa Lucía es un lugar de devoción y fe, 
                cargado de historia y belleza natural. Su ubicación como mirador natural y la 
                tranquilidad de su entorno lo convierten en un destino imperdible para quienes
                 buscan una experiencia religiosa y paisajística en Nariño."
                <span>- Relata un entrevistado que ha participado del evento.</span>
            </blockquote>
        </div>
    </section>
    @endsection