
@extends('layouts.myappLugares')

@section('content')

            <section class="main-hero" data-aos="fade-down" style="background: linear-gradient(rgba(34,139,34,0.9), rgba(34,139,34,0.7)), url('https://picsum.photos/1920/600?travel') center/cover;">
                <div class="hero-header">
                    <h1 class="main-title">🏕️Gruta de la Virgen de Lourdes🗺️</h1>
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
                <i class="fas fa-monument"></i>
                <h3>Construcción y singularidad:</h3>
                <p> La Gruta de la Virgen de Lourdes, construida con piedras 
                    recogidas por los habitantes, destaca por su carácter único y rústico,
                     con una cruz tallada en piedra y una urna adornada con flores.</p>
            </div>
            
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-road"></i>
                <h3>Accesibilidad:</h3>
                <p> Situada a la orilla de la calle en el barrio Lourdes, la gruta es fácilmente 
                    accesible a pie o en vehículo, permitiendo que 
                    tanto locales como turistas la visiten sin complicaciones.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-camera"></i>
                <h3>Experiencia espiritual:  </h3>
                <p>La gruta es un importante centro de devoción y un atractivo turístico, 
                    ofreciendo una experiencia espiritual y de conexión con la tradición de Providencia.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-torii-gate"></i>
                <h3>Eventos religiosos:</h3>
                <p> Cada año, en febrero, se celebran eventos religiosos en honor a la Virgen,
                     incluyendo novenas y misas, que atraen a muchos devotos y llenan el lugar de vida.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-sun"></i>
                <h3> Historia y creencias:</h3>
                <p> La gruta está ligada a la construcción del templo anterior 
                    de Providencia y es vista como un símbolo de fe y protección, 
                    cuidada y embellecida por los habitantes a lo largo del tiempo.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-hiking"></i>
                <h3>Recomendaciones para visitantes:</h3>
                <p>  Se aconseja visitar durante las festividades de febrero, respetar la naturaleza sagrada del lugar
                     y disfrutar de la paz y tranquilidad que ofrece para la reflexión.</p>
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
               <img src="{{ asset('img_lugares/g1.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Gruta de la Virgen de Lourdes: </h4>
                    <p> Una vista de la gruta construida con piedras recogidas por los habitantes.</p>
                    <div class="icon-group">
                        <i class="fas fa-hiking"></i>
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/g2.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Cruz Tallada en Piedra:</h4>
                    <p> La hermosa cruz tallada en piedra que adorna la gruta.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/g4.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Urna de la Virgen:</h4>
                    <p> La urna que guarda la imagen de la Virgen, adornada con flores.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
                <img src="{{ asset('img_lugares/g5.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Acceso a la Gruta:</h4>
                    <p> La gruta situada a la orilla de la calle, fácilmente accesible para visitantes.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/g4.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Eventos Religiosos: </h4>
                    <p>Devotos reunidos durante las festividades de febrero en honor a la Virgen.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/g3.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Entorno Tranquilo: </h4>
                    <p>  entorno sereno y tranquilo de la gruta, ideal para la reflexión y la paz.</p>
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
                <li><i class="fas fa-shield-alt"></i> Cuidar el lugar</li>
                <li><i class="fas fa-pray"></i>Mostrar respeto hacia las celebraciones en el lugar</li>
                <li><i class="fas fa-map-marked-alt"></i> Utilizar Google Maps</li>
            </ul>
            <blockquote>
                "La Gruta del Barrio Lourdes es un sitio de gran significado en Providencia,
                 combinando historia, devoción y belleza natural. Su singular construcción en
                  piedra y las festividades religiosas la convierten en un lugar especial 
                  tanto para locales como para visitantes, invitando a todos a formar 
                  parte de la tradición espiritual del municipio."
                <span>- Relata un entrevistado que ha participado del evento.</span>
            </blockquote>
        </div>
    </section>
    @endsection