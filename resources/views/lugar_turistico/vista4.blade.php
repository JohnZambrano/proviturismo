
@extends('layouts.myappLugares')

@section('content')

            <section class="main-hero" data-aos="fade-down" style="background: linear-gradient(rgba(34,139,34,0.9), rgba(34,139,34,0.7)), url('https://picsum.photos/1920/600?travel') center/cover;">
                <div class="hero-header">
                    <h1 class="main-title">🏕️Cerro La Tola 🗺️</h1>
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
                <p>  El Cerro La Tola está cerca del pueblo, a unos 200 o 250 metros,
                     combinando una parte montañosa y otra plana, ideal para relajarse en la naturaleza.</p>
            </div>
            
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-road"></i>
                <h3>Accesibilidad:</h3>
                <p>Llegar al Cerro La Tola es sencillo, ya sea en moto, carro, bicicleta o 
                    a pie por un sendero, cada opción ofreciendo su propio encanto.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-camera"></i>
                <h3>Belleza natural y cultural: </h3>
                <p>El principal atractivo es la tradición de elevar cometas, junto con la simpleza y calma del paisaje,
                     sin necesidad de infraestructura turística.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-sun"></i>
                <h3>Tradición de cometas:</h3>
                <p>  En julio y agosto, el cerro se llena de vida con la
                     tradición de elevar cometas, una actividad que se ha mantenido por generaciones.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-monument"></i>
                <h3>Experiencia auténtica:</h3>
                <p> El Cerro La Tola ofrece una experiencia auténtica y tranquila, conectando
                     a los visitantes con la naturaleza y una tradición local arraigada.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-hiking"></i>
                <h3>Recomendaciones para visitantes:</h3>
                <p> Se recomienda visitar en julio o agosto, llevar agua, comida y una cometa, 
                    y preferiblemente caminar por el sendero para disfrutar del paisaje.</p>
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
               <img src="{{ asset('img_lugares/tola.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Vista del Cerro La Tola: </h4>
                    <p> Una vista panorámica del cerro, combinando áreas montañosas y planas.</p>
                    <div class="icon-group">
                        <i class="fas fa-hiking"></i>
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/tola2.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Sendero hacia el Cerro:</h4>
                    <p>  Un sendero natural que lleva al cerro, ideal para caminatas.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/to4.jpg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4> Elevación de Cometas: </h4>
                    <p>Familias y amigos elevando cometas en el cerro durante julio y agosto.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
                <img src="{{ asset('img_lugares/to6.jpg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Paisaje Natural:</h4>
                    <p>  La belleza natural y la calma del Cerro La Tola, sin infraestructura turística.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/cicla.jpg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Acceso en Bicicleta: </h4>
                    <p> Visitantes llegando al cerro en bicicleta, disfrutando del recorrido.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/to4.jpg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4> Área de Relajación: </h4>
                    <p>Una zona plana del cerro, perfecta para relajarse y disfrutar de la naturaleza.</p>
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
                "El Cerro La Tola es un lugar especial en Providencia, ofreciendo una experiencia auténtica y 
                tranquila. Su fácil acceso, la belleza del paisaje y la tradición de 
                elevar cometas lo hacen un sitio imperdible para quienes buscan conectarse con la 
                naturaleza y las costumbres locales."
                <span>- Relata un entrevistado que ha participado del evento.</span>
            </blockquote>
        </div>
    </section>
    @endsection