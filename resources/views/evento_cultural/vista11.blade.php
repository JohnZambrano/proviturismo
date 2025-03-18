@extends('layouts.myappActividades')

@section('content')

            <section class="main-hero" data-aos="fade-down" style="background: linear-gradient(rgba(34,139,34,0.9), rgba(34,139,34,0.7)), url('https://picsum.photos/1920/600?travel') center/cover;">
                <div class="hero-header">
                    <h1 class="main-title">Tour por lugares característicos de Providencia</h1>
                    <div class="title-decoration">
                        <div class="decoration-line"></div>
                        <div class="decoration-star">✧</div>
                        <div class="decoration-line"></div>
                    </div>
                    <div class="hero-date">
                        <i class="fas fa-calendar-star"></i>
                        <p>Descubre</p>
                    </div>
                </div>
            </section>

            <br><br>


    <!-- Sección Descripción -->
    <section id="descripcion" class="section-info" data-aos="fade-up">
        <div class="section-header">
            <h2>Descubre la magia de lugares turisticos en Providencia</h2>
            <div class="decorative-line"></div>
        </div>
        
        <div class="info-cards">

          <div class="info-card" data-aos="flip-left">
                <i class="fas fa-shopping-basket"></i>
                <h3>Tour ecoturístico:</h3>
                <p> Un tour ecoturístico ofrece a los visitantes la oportunidad 
                    de explorar paisajes naturales impresionantes, aprender sobre la flora y fauna local,
                     y participar en actividades al aire libre como caminatas y observación de aves.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-monument"></i>
                <h3>Tour cultural: </h3>
                <p>Un tour cultural permite a los turistas sumergirse en la historia y tradiciones 
                    de una región, visitando museos, sitios históricos y participando en eventos locales que
                     reflejan la identidad cultural del lugar.</p>
            </div>
            
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-utensils"></i>
                <h3>Tour gastronómico:</h3>
                <p> Un tour gastronómico lleva a los visitantes a descubrir la cocina local,
                     degustando platos típicos en restaurantes y mercados, y aprendiendo sobre los ingredientes 
                     y técnicas culinarias tradicionales de la región.</p>
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
        <h2 data-aos="fade-right">🌍Experiencias únicas que vivirás☀️</h2>
        
        <div class="activity-carousel">
            <!-- Carrusel con tarjetas -->
            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img/FondoProvi.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Inicio del tour:</h4>
                    <p> La ruta ecoturística en Providencia comienza en el parque central
                         del casco urbano, donde los visitantes son recibidos con un desayuno organizado,
                          considerando diversas necesidades dietéticas.</p>
                    <div class="icon-group">
                        <i class="fas fa-monument"></i>
                        <i class="fas fa-utensils"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/m2.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Museo de Providencia: </h4>
                    <p>Al regresar al casco urbano, el grupo visita el museo local, 
                        que exhibe cerámicas precolombinas y objetos contemporáneos que reflejan la rica
                         historia de la región.</p>
                    <div class="icon-group">
                    <i class="fas fa-monument"></i>
                    <i class="fas fa-utensils"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img/Ruinas.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Vereda El Rosario:</h4>
                    <p> A 15 minutos en vehículo, los turistas disfrutan del entorno natural
                         de El Rosario durante una a dos horas, antes de continuar hacia la vereda Tandayán.</p>
                    <div class="icon-group">
                    <i class="fas fa-monument"></i>
                    <i class="fas fa-utensils"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
                <img src="{{ asset('img_actividades/tanda.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Vereda Tandayán: </h4>
                    <p>En Tandayán, los visitantes exploran el pozo de agua sal y la Cascada del Pensamiento,
                         donde se ofrece una terapia de relajación en un entorno natural.</p>
                    <div class="icon-group">
                    <i class="fas fa-monument"></i>
                    <i class="fas fa-utensils"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img/SaladoGrande.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Vereda El Salado Grande:</h4>
                    <p> Conocida por sus pozos de aguasal y estructuras de piedra,
                         El Salado Grande ofrece una actividad de turismo contemplativo, observando la
                          belleza natural y aprendiendo sobre su historia.</p>
                    <div class="icon-group">
                    <i class="fas fa-monument"></i>
                    <i class="fas fa-utensils"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img/LaRusia.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Vereda El Placer: </h4>
                    <p>La Cascada La Rusia, también llamada Cascada de la Virgen, es un sitio
                         culturalmente relevante donde se realiza la ceremonia del Inti Raymi y se ofrece una terapia 
                         de relajación guiada.</p>
                    <div class="icon-group">
                    <i class="fas fa-monument"></i>
                    <i class="fas fa-utensils"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img/cueva.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Vereda La Floresta:</h4>
                    <p> Los visitantes exploran un túnel de gran valor histórico,
                         posiblemente de origen precolombino, y reciben información detallada sobre 
                         su uso en tiempos antiguos.</p>
                    <div class="icon-group">
                    <i class="fas fa-monument"></i>
                    <i class="fas fa-utensils"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img/Bellaco.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Vereda La Floresta El Salado Bellaco:</h4>
                    <p> El Centro Ecoturístico Salado Bellaco es un lugar. Es conocido por su pozo de agua salada
                         y una capilla creada en honor a la Virgen de la Divina Providencia. </p>
                    <div class="icon-group">
                    <i class="fas fa-monument"></i>
                    <i class="fas fa-utensils"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img/loveprovi.jpg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Evento cultural y finca El Nogal: </h4>
                    <p>Los turistas asisten a una presentación del coro 
                        “Cantares de mi tierra” y visitan la finca El Nogal en Santa Lucía, donde aprenden
                         sobre la obtención de la fibra de fique y sus derivados.</p>
                    <div class="icon-group">
                    <i class="fas fa-monument"></i>
                    <i class="fas fa-utensils"></i>
                    </div>
                </div>
            </div>
            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img/Providencia.jpg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Recomendaciones para el Tour:</h4>
                    <p>Si planeas hacer un tour en Providencia, te recomiendo llevar ropa cómoda y adecuada
                         para actividades al aire libre, así como protección solar y repelente de insectos.
                          Además, es útil informar con anticipación sobre tus preferencias alimenticias
                           para que puedan prepararse adecuadamente.</p>
                    <div class="icon-group">
                    <i class="fas fa-monument"></i>
                    <i class="fas fa-utensils"></i>
                    </div>
                </div>
            </div>
            
            <!-- Más tarjetas de actividades -->
        </div>

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
                <li><i class="fas fa-clock"></i> Llegar temprano</li>
                <li><i class="fas fa-tshirt"></i> Ropa cómoda</li>
                <li><i class="fas fa-wine-glass"></i> Llevar agua</li>
            </ul>
            <blockquote>
                "Si planeas hacer un tour en Providencia, te recomiendo llevar ropa cómoda y adecuada 
                para actividades al aire libre, así como protección solar y repelente de insectos.
                 Además, es útil informar con anticipación sobre tus preferencias alimenticias
                  para que puedan prepararse adecuadamente."
                <span>- Relata un entrevistado que ha participado del evento.</span>
            </blockquote>
        </div>
    </section>
    <br><br><br>
    @endsection 
 