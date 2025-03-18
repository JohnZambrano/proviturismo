
@extends('layouts.myappLugares')

@section('content')

            <section class="main-hero" data-aos="fade-down" style="background: linear-gradient(rgba(34,139,34,0.9), rgba(34,139,34,0.7)), url('https://picsum.photos/1920/600?travel') center/cover;">
                <div class="hero-header">
                    <h1 class="main-title">🏕️Las Torres mirador  🗺️</h1>
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
                <h3>Ubicación y vistas: </h3>
                <p>Las Torres Mirador, situadas a 3000 metros sobre el 
                    nivel del mar, ofrecen vistas espectaculares de la vegetación y varios municipios de Nariño.</p>
            </div>
            
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-road"></i>
                <h3>Accesibilidad:</h3>
                <p> Llegar a Las Torres puede ser una aventura, ya que se puede caminar, ir en bici, o en carro o moto 
                    hasta cierto punto, seguido de una caminata de 20 a 25 minutos.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-camera"></i>
                <h3>Popularidad: </h3>
                <p> Este lugar es muy querido por turistas y locales debido a las impresionantes vistas y 
                    la abundante naturaleza que se aprecia desde el inicio del camino.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-monument"></i>
                <h3>Atractivos:</h3>
                <p>  La vista desde la cima es el principal atractivo, ideal para la fotografía 
                    de paisajes, y el lugar se mantiene natural sin restaurantes ni hoteles.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-sun"></i>
                <h3>Actividades recreativas:</h3>
                <p> Los turistas pueden disfrutar de caminatas, senderismo, fotografía y acampadas, 
                    haciendo de Las Torres un refugio perfecto para desconectarse del ruido.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-hiking"></i>
                <h3>Recomendaciones para visitantes:</h3>
                <p> Se aconseja llevar ropa abrigada y suficiente comida, especialmente si se planea acampar,
                     y estar dispuesto a disfrutar de la naturaleza y la tranquilidad del lugar.</p>
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
               <img src="{{ asset('img_lugares/torres.jpg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Vista Panorámica desde Las Torres: </h4>
                    <p> Una vista impresionante de varios municipios de Nariño desde la cima.</p>
                    <div class="icon-group">
                        <i class="fas fa-hiking"></i>
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/t5.jpg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Camino hacia Las Torres:</h4>
                    <p>  Un sendero de tierra y piedra rodeado de abundante vegetación.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            

            <div class="activity-card" data-aos="zoom-in">
                <img src="{{ asset('img_lugares/t3.jpg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Cima de Las Torres:</h4>
                    <p>  El punto más alto con vistas espectaculares y sin infraestructura turística.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/t2.jpg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Área de Acampada:</h4>
                    <p>  Un espacio natural perfecto para acampar y disfrutar de la tranquilidad.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/t5.jpg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4> Vegetación Abundante:</h4>
                    <p> La naturaleza exuberante que se aprecia desde el inicio del recorrido.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/torres1.jpg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Fotografía del Paisaje: </h4>
                    <p> Un lugar ideal para capturar la belleza de los paisajes naturales.</p>
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
                "Las Torres Mirador en Providencia, Nariño, son un lugar con un encanto especial, 
                ofreciendo vistas panorámicas y un espacio de tranquilidad. Aunque carece de infraestructura turística, 
                su belleza natural y oportunidades para caminatas y acampadas lo hacen ideal para quienes buscan relajarse
                 y conectarse con el paisaje."
                <span>- Relata un entrevistado que ha participado del evento.</span>
            </blockquote>
        </div>
    </section>
    @endsection

   