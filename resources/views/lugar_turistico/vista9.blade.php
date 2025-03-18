
@extends('layouts.myappLugares')

@section('content')

            <section class="main-hero" data-aos="fade-down" style="background: linear-gradient(rgba(34,139,34,0.9), rgba(34,139,34,0.7)), url('https://picsum.photos/1920/600?travel') center/cover;">
                <div class="hero-header">
                    <h1 class="main-title">🏕️La Profundidad🗺️</h1>
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
                <i class="fas fa-map-marked-alt"></i>
                <h3>Ubicación y atractivo:</h3>
                <p> La Profundidad, situada entre las veredas Villaflor, Doñana y El Cansino en Samaniego, 
                    es conocida por su asombrosa belleza natural y ambiente tranquilo, con árboles gigantes
                     y un río que forma una cascada.</p>
            </div>
            
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-road"></i>
                <h3>Accesibilidad:</h3>
                <p>  Se puede acceder a La Profundidad desde las veredas Villaflor o Doña Ana, en moto o carro hasta cierto punto,
                     seguido de una caminata de 30 a 40 minutos por caminos de tierra que ofrecen vistas naturales.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-camera"></i>
                <h3>Experiencia única:</h3>
                <p>La Profundidad ofrece una experiencia de paz y serenidad, combinando belleza natural y actividades 
                    recreativas en uno de los entornos más bellos de la región.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-monument"></i>
                <h3>Historia y árboles "abuelos":</h3>
                <p>  Los antiguos árboles "abuelos" y el río San Juan, 
                    con su cascada y formaciones rocosas, dan al lugar un aire sagrado y una rica historia natural.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-sun"></i>
                <h3>Actividades y experiencias:</h3>
                <p> Ideal para el senderismo, paseos de olla, nadar en el río, y la observación de aves y plantas
                     nativas, La Profundidad es un punto de encuentro para familias y amigos.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-hiking"></i>
                <h3>Recomendaciones para visitantes:</h3>
                <p> Se recomienda llevar alimentos, agua, ropa adecuada para caminatas largas y abrigo, y cuidar el lugar no 
                    arrojando basura ni dañando la flora y fauna.</p>
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
               <img src="{{ asset('img_lugares/pro3.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Vista Panorámica de La Profundidad:</h4>
                    <p>  Una vista impresionante de las montañas y la vegetación que rodean La Profundidad.</p>
                    <div class="icon-group">
                        <i class="fas fa-hiking"></i>
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/abu.jpg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Árboles "Abuelos":</h4>
                    <p>  Los majestuosos árboles gigantes que dan al lugar un aire antiguo y sagrado.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/pro5.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Cascada del Río San Juan:</h4>
                    <p>  La cascada formada por el río San Juan, un punto destacado del paisaje.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
                <img src="{{ asset('img_lugares/pro4.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Sendero Natural:</h4>
                    <p>  Un camino de tierra que lleva a La Profundidad, ideal para caminatas.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            
            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/pro2.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Observación de Fauna y Flora:</h4>
                    <p>  La rica fauna y flora que se puede observar en La Profundidad, hogar de diversas especies.</p>
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
                "La Profundidad es un lugar que combina belleza natural y rica historia ancestral, 
                ofreciendo una experiencia única de paz y serenidad. Con sus majestuosos árboles "abuelos",
                 el río San Juan y su túnel natural, es un refugio para quienes buscan una conexión
                  profunda con la naturaleza, y su conservación es esencial para futuras generaciones."
                <span>- Relata un entrevistado que ha participado del evento.</span>
            </blockquote>
        </div>
    </section>

    @endsection