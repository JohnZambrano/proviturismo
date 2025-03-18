@extends('layouts.myappLugares')

@section('content')

            <section class="main-hero" data-aos="fade-down" style="background: linear-gradient(rgba(34,139,34,0.9), rgba(34,139,34,0.7)), url('https://picsum.photos/1920/600?travel') center/cover;">
                <div class="hero-header">
                    <h1 class="main-title">🏕️Sendero Ecoturístico El Común  🗺️</h1>
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
                        <source src="{{ asset('videos/td2.mp4') }}" type="video/mp4">
                        <source src="{{ asset('videos/td2.webm') }}" type="video/webm">
                        <source src="{{ asset('videos/td2.ogv') }}" type="video/ogg">
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
                <i class="fas fa-camera"></i>
                <h3>Tranquilidad y naturaleza:</h3>
                <p>  El Común es un lugar tranquilo rodeado
                     de naturaleza, con pozos de agua salada que atraen
                      a quienes buscan paz y belleza natural.</p>
            </div>
            
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-monument"></i>
                <h3>Valor histórico:</h3>
                <p>  Los pozos de agua salada tienen un valor histórico significativo, 
                    ya que antiguamente se utilizaban para extraer sal, un recurso importante para la región.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-map-marked-alt"></i>
                <h3>Accesibilidad: </h3>
                <p> Llegar a El Común de Tandayan puede ser un desafío,
                     ya que está a 30 minutos de Providencia y no es muy conocido, 
                     pero ofrece una escapada perfecta de la ciudad.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-hiking"></i>
                <h3>Potencial turístico:</h3>
                <p>  Aunque actualmente no hay actividades organizadas, el lugar tiene potencial para el turismo,
                     con pozos de sal y la cascada del Pensamiento como principales atractivos.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-sun"></i>
                <h3>Propuestas de mejora: </h3>
                <p>Se sugiere mejorar los caminos y promocionar El Común como un destino turístico,
                     lo que podría atraer más visitantes y beneficiar económicamente a la zona.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-home"></i>
                <h3>Experiencias culturales: </h3>
                <p> Crear rutas turísticas que expliquen la historia de la extracción de sal añadiría
                     valor cultural y mantendría viva la historia del lugar, atrayendo a interesados en la cultura local.</p>
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
               <img src="{{ asset('img_lugares/td6.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Pozo de Agua Salada: </h4>
                    <p> Un pozo histórico utilizado antiguamente para la extracción de sal.</p>
                    <div class="icon-group">
                        <i class="fas fa-hiking"></i>
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/td.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Cascada del Pensamiento:</h4>
                    <p>  Una cascada escondida en la vegetación, ideal para la relajación.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/td1.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Sendero Natural:</h4>
                    <p>  Un sendero que invita a explorar la naturaleza y disfrutar de caminatas.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
                <img src="{{ asset('img_lugares/ki.jpg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Kiosco y Cocina:</h4>
                    <p> Un espacio ideal para cocinar y disfrutar de un picnic en familia.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/td4.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4> Áreas Verdes: </h4>
                    <p>Espacios verdes perfectos para actividades al aire libre y juegos.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/se.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Sendero Natural:</h4>
                    <p>  Un sendero que ofrece una caminata tranquila y vistas naturales impresionantes.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>
            

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/td8.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Señalización:</h4>
                    <p> Señalizacion de lugares especificos para mejor orientación de turístas.</p>
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
                "El Común de Tandayan, con sus pozos de agua salada y su rica historia, 
                tiene un gran potencial como destino turístico en Providencia, Nariño.
                 Su belleza natural y valor histórico merecen ser promocionados y desarrollados
                  para ofrecer una experiencia única a los visitantes."
                <span>- Relata un entrevistado que ha participado del evento.</span>
            </blockquote>
        </div>
    </section>
    <br><br><br>
    @endsection