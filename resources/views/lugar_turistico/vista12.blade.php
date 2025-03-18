
@extends('layouts.myappLugares')

@section('content')

            <section class="main-hero" data-aos="fade-down" style="background: linear-gradient(rgba(34,139,34,0.9), rgba(34,139,34,0.7)), url('https://picsum.photos/1920/600?travel') center/cover;">
                <div class="hero-header">
                    <h1 class="main-title">🏕️ Cascada La Rusia 🗺️</h1>
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
                        <source src="{{ asset('videos/rusia.mp4') }}" type="video/mp4">
                        <source src="{{ asset('videos/rusia.webm') }}" type="video/webm">
                        <source src="{{ asset('videos/rusia.ogv') }}" type="video/ogg">
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
                <i class="fas fa-tree"></i>
                <h3>Belleza cautivadora:</h3>
                <p>  La Cascada La Rusia, en la vereda El Placer, es un lugar que cautiva con su belleza. 
                    Su nombre proviene de la apariencia de una cabellera larga de mujer,
                     formada por el agua y las rocas visibles.</p>
            </div>
            
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-road"></i>
                <h3>Accesibilidad:</h3>
                <p>  Llegar a la cascada requiere un viaje de 30 minutos en carro desde el casco urbano de Providencia,
                     seguido de una caminata de 10 minutos por un sendero rústico. 
                     Es recomendable llevar buenos zapatos debido al terreno pantanoso.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-camera"></i>
                <h3>Relajación y paz: </h3>
                <p> El sonido y la brisa de la cascada son tan relajantes que los visitantes
                     sienten como si todo lo demás desapareciera. Rodeada de árboles y vegetación, 
                     es un pequeño paraíso escondido.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-link"></i>
                <h3>Historia y rituales:  </h3>
                <p> La cascada siempre fue importante para los indígenas de la zona, 
                    quienes realizaban rituales allí. Hoy, los habitantes de la vereda la 
                    cuidan mucho, conscientes de su valor.</p>
            </div>


           

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-sun"></i>
                <h3>Actividades y experiencias:</h3>
                <p> Los visitantes disfrutan del fuerte y fresco ruido del agua, y algunos se sumergen
                     en los pozos formados en la base de la cascada. Es un sitio perfecto para desconectarse y estar en paz.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-hiking"></i>
                <h3>Recomendaciones para visitantes:</h3>
                <p> Se recomienda llevar ropa cómoda, agua y no dejar basura. Es mejor visitar en temporada seca
                     para evitar problemas con el barro, y usar zapatos de buen agarre debido al terreno inclinado.</p>
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
               <img src="{{ asset('img_lugares/r1.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Cascada La Rusia: </h4>
                    <p> La impresionante Cascada La Rusia en la vereda El Placer.</p>
                    <div class="icon-group">
                        <i class="fas fa-hiking"></i>
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

           

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/r2.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Sendero rústico:</h4>
                    <p>  Sendero rústico que lleva a la cascada.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
                <img src="{{ asset('img_lugares/r4.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Rituales indígenas:</h4>
                    <p>  Lugar sagrado para los rituales indígenas.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/r1.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Cabellera de agua:</h4>
                    <p>  La cascada formando una cabellera larga de mujer.</p>
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
                "La Cascada La Rusia es un tesoro escondido en la vereda El Placer, valorado por su belleza y su historia. 
                Con el cuidado y respeto de los visitantes, puede convertirse en un destino turístico apreciado por muchos."
                <span>- Relata un entrevistado que ha participado del evento.</span>
            </blockquote>
        </div>
    </section>

    @endsection