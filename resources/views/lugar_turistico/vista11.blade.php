
@extends('layouts.myappLugares')

@section('content')

            <section class="main-hero" data-aos="fade-down" style="background: linear-gradient(rgba(34,139,34,0.9), rgba(34,139,34,0.7)), url('https://picsum.photos/1920/600?travel') center/cover;">
                <div class="hero-header">
                    <h1 class="main-title">🏕️Chorrera en la vereda Ranchería 🗺️</h1>
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
                <i class="fas fa-tree"></i>
                <h3>Belleza natural y tranquilidad:</h3>
                <p> La Chorrera en la vereda Ranchería de Providencia,
                     Nariño, es una cascada que forma una poceta natural, ideal para un baño refrescante 
                     en días calurosos. Es un rincón natural que ofrece un paisaje hermoso y una experiencia única.</p>
            </div>
            
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-road"></i>
                <h3> Acceso desafiante:</h3>
                <p> Llegar a La Chorrera requiere esfuerzo y planificación, ya que no hay 
                    acceso vehicular. El camino es de trocha, lo que lo hace complicado, 
                    pero el esfuerzo es recompensado con la belleza natural del lugar.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-camera"></i>
                <h3>Conexión con la naturaleza: </h3>
                <p> La Chorrera no solo es un sitio
                     de recreación, sino también un espacio de conexión con la naturaleza.
                     Los visitantes disfrutan del agua que fluye por la cascada y de la paz que transmite el lugar.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-monument"></i>
                <h3>Actividades y experiencias:</h3>
                <p>  La Chorrera ofrece experiencias relacionadas con la naturaleza
                     y la tranquilidad. Los visitantes suelen bañarse en las aguas frescas de la cascada y 
                     organizar comidas improvisadas en las áreas cercanas.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-sun"></i>
                <h3>Bienestar emocional:</h3>
                <p>  La cascada es apreciada por quienes buscan una buena experiencia en un entorno natural.
                     Los baños en la cascada ayudan a aliviar la depresión o la ansiedad, 
                     añadiendo un valor sanativo al lugar.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-hiking"></i>
                <h3>Recomendaciones para visitantes:</h3>
                <p>  Es importante estar preparados para una experiencia de contacto directo con la naturaleza.
                     Se recomienda llevar alimentos, agua, calzado adecuado y ropa cómoda, además de respetar el entorno natural.</p>
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
               <img src="{{ asset('img/CascadaRancheria.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Cascada La Chorrera:</h4>
                    <p> La hermosa cascada La Chorrera en la vereda Ranchería.</p>
                    <div class="icon-group">
                        <i class="fas fa-hiking"></i>
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/cas1.jpg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Poceta natural: </h4>
                    <p> Poceta natural formada por la caída de la cascada.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/cas2.jpg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Camino de trocha: </h4>
                    <p> Sendero de trocha que lleva a La Chorrera.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
                <img src="{{ asset('img_lugares/cas.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Baño refrescante: </h4>
                    <p> Visitantes disfrutando de un baño refrescante en la cascada.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/cas2.jpg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Naturaleza y tranquilidad: </h4>
                    <p> Paisaje natural y tranquilo alrededor de La Chorrera.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/cas1.jpg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Exploración segura: </h4>
                    <p> Visitantes explorando La Chorrera con equipo adecuado.</p>
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
                "La Chorrera en la vereda Ranchería es un tesoro natural con potencial turístico.
                 Su belleza y tranquilidad son ideales para quienes buscan reconectar con la naturaleza,
                  pero es necesario mejorar el acceso y la infraestructura para los visitantes."
                <span>- Relata un entrevistado que ha participado del evento.</span>
            </blockquote>
        </div>
    </section>
    @endsection
  