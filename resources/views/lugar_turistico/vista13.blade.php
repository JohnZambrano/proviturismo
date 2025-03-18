
@extends('layouts.myappLugares')

@section('content')

            <section class="main-hero" data-aos="fade-down" style="background: linear-gradient(rgba(34,139,34,0.9), rgba(34,139,34,0.7)), url('https://picsum.photos/1920/600?travel') center/cover;">
                <div class="hero-header">
                    <h1 class="main-title">🏕️  Ruinas de El Rosario🗺️</h1>
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
                <h3> Ruinas milenarias:</h3>
                <p> Las ruinas de El Rosario en Providencia consisten en tres edificaciones 
                    con muros de piedras labradas con precisión milimétrica,
                     narrando una historia antigua conocida solo a medias.</p>
            </div>
            
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-road"></i>
                <h3>Accesibilidad:</h3>
                <p> Desde la escuela de la vereda El Rosario, se baja 200 metros hacia la izquierda y se 
                    camina unos 10 minutos por un sendero de herradura hasta llegar a las ruinas.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-camera"></i>
                <h3>Experiencia inolvidable:</h3>
                <p> Las ruinas ofrecen una experiencia única, con formaciones subterráneas
                     y terrazas que podrían haber sido usadas para la agricultura,
                      aunque aún no se ha comprobado científicamente.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-monument"></i>
                <h3>Historia precolombina:</h3>
                <p>  Se cree que las estructuras son precolombinas y que allí vivió una comunidad indígena. 
                    Cerca del sitio se han encontrado cerámicas y herramientas de piedra.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-sun"></i>
                <h3>Daños históricos:</h3>
                <p> En la década de 1970, buscadores de oro destruyeron parte de las construcciones originales,
                     dejando solo una de las tres estructuras en pie.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-hiking"></i>
                <h3>Recomendaciones para visitantes:</h3>
                <p>  Es importante llevar ropa adecuada, agua y alimentos, y realizar el paseo con precaución y respeto por
                     el entorno para conservar el lugar.</p>
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
               <img src="{{ asset('img_lugares/ru4.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4> Ruinas de El Rosario:</h4>
                    <p> Las impresionantes ruinas de El Rosario en Providencia.</p>
                    <div class="icon-group">
                        <i class="fas fa-hiking"></i>
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/ru5.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4> Sendero de herradura:</h4>
                    <p> Sendero de herradura que lleva a las ruinas.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/ru2.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Formaciones subterráneas: </h4>
                    <p> Formaciones subterráneas en las ruinas.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
                <img src="{{ asset('img_lugares/ru3.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Cerámicas y herramientas: </h4>
                    <p> Cerámicas y herramientas de piedra encontradas cerca de las ruinas.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/ru1.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Daños históricos: </h4>
                    <p> Columnas dispersas que recuerdan la grandeza de las ruinas.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/ru6.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4> Exploración segura:</h4>
                    <p> Visitantes explorando las ruinas con equipo adecuado.</p>
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
                "Las ruinas de la vereda El Rosario son reliquias llenas de historia que despiertan curiosidad y admiración. 
                Con el cuidado y apoyo adecuado, pueden convertirse en un sitio de gran valor histórico y turístico."
                <span>- Relata un entrevistado que ha participado del evento.</span>
            </blockquote>
        </div>
    </section>

    @endsection