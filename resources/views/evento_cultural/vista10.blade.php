@extends('layouts.myappActividades')

@section('content')

            <section class="main-hero" data-aos="fade-down" style="background: linear-gradient(rgba(34,139,34,0.9), rgba(34,139,34,0.7)), url('https://picsum.photos/1920/600?travel') center/cover;">
                <div class="hero-header">
                    <h1 class="main-title">Fiestas y belenes en el municipio de Providencia</h1>
                    <div class="title-decoration">
                        <div class="decoration-line"></div>
                        <div class="decoration-star">✧</div>
                        <div class="decoration-line"></div>
                    </div>
                    <div class="hero-date">
                        <i class="fas fa-calendar-star"></i>
                        <p>Participa</p>
                    </div>
                </div>
            </section>

            <br><br>


    <!-- Sección Descripción -->
    <section id="descripcion" class="section-info" data-aos="fade-up">
        <div class="section-header">
            <h2>Una celebración llena de actividades sorprendentes</h2>
            <div class="decorative-line"></div>
        </div>
        
        <div class="info-cards">

          <div class="info-card" data-aos="flip-left">
                <i class="fas fa-church"></i>
                <h3>Fiestas y belenes en el municipio de Providencia:</h3>
                <p>En Providencia, las fiestas y belenes se celebran en cada vereda y algunos barrios, 
                    con fechas que varían entre junio y septiembre según el santo o la región. </p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-fire"></i>
                <h3>Fechas y eventos:</h3>
                <p>Se celebran en fechas variables, con el domingo como día principal. Incluyen:
                    quema de vaca loca, danzas, misa solemne y procesiones.</p>
            </div>
            
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-flag"></i>
                <h3>Actividades variadas:</h3>
                <p> Durante las fiestas, hay procesiones, quema de castillo, vaca loca, 
                    juegos deportivos y festivales gastronómicos, ofreciendo algo para todas las edades.</p>
            </div>

        </div>
    </section>

    <!-- Sección Actividades -->
    <section id="actividades" class="activities-section">
        <h2 data-aos="fade-right"> 🎉Experiencias únicas que vivirás☀️</h2>
        
        <div class="activity-carousel">
            <!-- Carrusel con tarjetas -->
            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/añonuev.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Raíces religiosas:</h4>
                    <p> Las festividades tienen profundas raíces religiosas, rindiendo homenaje a la Santísima 
                        Trinidad, la Virgen María y santos como San Francisco de Asís.</p>
                    <div class="icon-group">
                        <i class="fas fa-church"></i>
                        <i class="fas fa-laugh-beam"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/castillo.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Tradiciones vivas: </h4>
                    <p>La quema de castillo y las danzas son tradiciones que se han mantenido vivas, reforzando
                         la identidad cultural de Providencia.</p>
                    <div class="icon-group">
                    <i class="fas fa-church"></i>
                    <i class="fas fa-laugh-beam"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/desf.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Integración social: </h4>
                    <p>Las fiestas patronales no solo promueven la devoción religiosa, sino que también fomentan 
                        la integración social y económica del municipio a través de diversas actividades.</p>
                    <div class="icon-group">
                    <i class="fas fa-church"></i>
                    <i class="fas fa-laugh-beam"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
                <img src="{{ asset('img_actividades/micro.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Experiencia única:</h4>
                    <p> Los visitantes pueden disfrutar de un ambiente festivo y acogedor, participando en eventosen eventos 
                    culturales y festivos que ofrecen una experiencia inolvidable y enriquecedora.</p>
                    <div class="icon-group">
                    <i class="fas fa-church"></i>
                    <i class="fas fa-laugh-beam"></i>
                    </div>
                </div>
            </div>
            <div class="activity-card" data-aos="zoom-in">
                <img src="{{ asset('img_actividades/fiesta1.jpg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Fiesta en Santa Lucía:</h4>
                    <p>  En septiembre, Santa Lucía celebra a la Virgen de las
                         Lajas con una procesión desde la escuela hasta la capilla, seguida de misa, danzas y rifas. Al día siguiente,
                         hay actividades deportivas como microfútbol y carreras de sacos, uniendo a la comunidad en devoción y alegría.</p>
                    <div class="icon-group">
                    <i class="fas fa-church"></i>
                    <i class="fas fa-laugh-beam"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
                <img src="{{ asset('img_actividades/fiesta2.jpg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Fiesta en El Carrizal:</h4>
                    <p>  En junio, El Carrizal celebra a San Antonio con gran devoción, 
                        atrayendo a personas de veredas y pueblos cercanos. Destacan el montaje del belén,
                         danzas, fuegos artificiales y la "vaca loca", además de torneos de voleibol
                          y microfútbol, mezclando fe y diversión comunitaria.</p>
                    <div class="icon-group">
                    <i class="fas fa-church"></i>
                    <i class="fas fa-laugh-beam"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
                <img src="{{ asset('img_actividades/fiesta3.jpg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Fiesta en Betania: </h4>
                    <p> También en junio, Betania celebra al Sagrado Corazón de Jesús con novenas,
                         misa y procesiones. Aunque a veces los recursos son limitados, 
                         la comunidad se esfuerza por mantener viva la tradición, organizando 
                         actividades culturales y deportivas centradas en la fe y la unión.</p>
                    <div class="icon-group">
                    <i class="fas fa-church"></i>
                    <i class="fas fa-laugh-beam"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
                <img src="{{ asset('img_actividades/fiesta4.jpg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Fiesta en San Francisco:</h4>
                    <p>  San Francisco celebra al Sagrado Corazón de Jesús con actividades 
                        similares a Betania, incluyendo misas, procesiones y eventos culturales como danzas.
                         Estas actividades refuerzan los valores religiosos y sociales de la comunidad..</p>
                    <div class="icon-group">
                    <i class="fas fa-church"></i>
                    <i class="fas fa-laugh-beam"></i>
                    </div>
                </div>
            </div>

    
            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/cuy2.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Recomendaciones:</h4>
                    <p> Para disfrutar plenamente, se recomienda llegar en las fechas festivas, participar en las actividades, 
                        y probar la gastronomía local durante los festivales.</p>
                    <div class="icon-group">
                    <i class="fas fa-church"></i>
                    <i class="fas fa-laugh-beam"></i>
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
                <li><i class="fas fa-dollar-sign icono-dinero"></i> Llevar dinero para degustar de ventas y productos ofrecidos.</li>
                <li><i class="fas fa-map-marked-alt"></i> Ubicación estratégica</li>
            </ul>
            <blockquote>"Las fiestas y belenes en Providencia son una celebración vibrante y diversa que combina 
                devoción religiosa y actividades culturales. Estas festividades, que varían según la vereda y
                 el santo, unen a la comunidad a través de misas, procesiones, danzas y eventos deportivos."
                <span>- Relata un entrevistado que ha participado del evento.</span>
            </blockquote>
        </div>
    </section>
    <br><br><br>
    @endsection 
 