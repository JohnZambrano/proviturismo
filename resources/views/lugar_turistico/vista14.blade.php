
@extends('layouts.myappLugares')

@section('content')

            <section class="main-hero" data-aos="fade-down" style="background: linear-gradient(rgba(34,139,34,0.9), rgba(34,139,34,0.7)), url('https://picsum.photos/1920/600?travel') center/cover;">
                <div class="hero-header">
                    <h1 class="main-title">🏕️ Museo de Providencia🗺️</h1>
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
                <i class="fas fa-book-open"></i>
                <h3>Historia y cultura:</h3>
                <p>  El Museo de Providencia, ubicado en el corazón del municipio, es un espacio dedicado a preservar 
                    y compartir la rica historia y cultura de la región. Ofrece a los
                     visitantes una oportunidad única para explorar las raíces de Providencia.</p>
            </div>
            
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-camera"></i>
                <h3>Exhibiciones diversas: </h3>
                <p> El museo cuenta con diversas exhibiciones y colecciones 
                    que abarcan desde artefactos precolombinos hasta objetos
                     de la vida cotidiana de los habitantes de Providencia a lo largo de los siglos.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-hands-helping"></i>
                <h3>Educación y aprendizaje: </h3>
                <p> Además de sus exhibiciones permanentes, el museo organiza talleres 
                    y actividades educativas para todas las edades, fomentando el aprendizaje y la apreciación 
                    de la historia local.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-monument"></i>
                <h3>Arquitectura del museo:</h3>
                <p>  El edificio del museo es una joya arquitectónica en sí misma, combinando elementos tradicionales
                     con un diseño moderno que invita a la exploración y el descubrimiento.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-sun"></i>
                <h3>Eventos culturales:</h3>
                <p> El museo también es un centro de eventos culturales, donde se realizan exposiciones temporales,
                     conferencias y presentaciones artísticas que enriquecen la vida cultural de Providencia.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-link"></i>
                <h3>Conservación y restauración:</h3>
                <p>  Una de las misiones del museo es la conservación y restauración de objetos históricos,
                     asegurando que las futuras generaciones puedan disfrutar y aprender de ellos.</p>
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
               <img src="{{ asset('img_lugares/mu.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Arquitectura del museo:</h4>
                    <p>  Detalles arquitectónicos del edificio del museo.</p>
                    <div class="icon-group">
                        <i class="fas fa-hiking"></i>
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/mu2.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Restauración de artefactos: </h4>
                    <p> Proceso de restauración de objetos históricos en el museo.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/mu3.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Arquitectura del museo:</h4>
                    <p>  Detalles arquitectónicos del edificio del museo.</p>
                    <div class="icon-group">
                        <i class="fas fa-hiking"></i>
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/mu4.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Restauración de artefactos: </h4>
                    <p> Proceso de restauración de objetos históricos en el museo.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/mu5.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Arquitectura del museo:</h4>
                    <p>  Detalles arquitectónicos del edificio del museo.</p>
                    <div class="icon-group">
                        <i class="fas fa-hiking"></i>
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/mu6.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Restauración de artefactos: </h4>
                    <p> Proceso de restauración de objetos históricos en el museo.</p>
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
                "El Museo de Providencia es un espacio vital para la preservación y difusión de la historia 
                y cultura local. Con sus diversas exhibiciones y actividades, ofrece una experiencia 
                enriquecedora para todos los visitantes, fomentando el aprendizaje y la apreciación del patrimonio de Providencia."
                <span>- Relata un entrevistado que ha participado del evento.</span>
            </blockquote>
        </div>
    </section>
    @endsection
 