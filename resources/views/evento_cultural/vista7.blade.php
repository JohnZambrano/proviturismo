@extends('layouts.myappActividades')

@section('content')

            <section class="main-hero" data-aos="fade-down" style="background: linear-gradient(rgba(34,139,34,0.9), rgba(34,139,34,0.7)), url('https://picsum.photos/1920/600?travel') center/cover;">
                <div class="hero-header">
                    <h1 class="main-title">Aniversario del municipio</h1>
                    <div class="title-decoration">
                        <div class="decoration-line"></div>
                        <div class="decoration-star">✧</div>
                        <div class="decoration-line"></div>
                    </div>
                    <div class="hero-date">
                        <i class="fas fa-calendar-star"></i>
                        <p>Septiembre</p>
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
                <h3>Las fiestas patronales en Providencia:</h3>
                <p>Las fiestas patronales en Providencia, Nariño, son dedicadas a la Santísima Trinidad y
                     al Divino Niño, combinando actos religiosos, culturales y recreativos.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-fire"></i>
                <h3>Fechas y eventos:</h3>
                <p>Se celebran en junio, con el domingo como día principal. Incluyen novenas, 
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
        <h2 data-aos="fade-right">💃Experiencias únicas que vivirás☀️</h2>
        
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
                <img src="{{ asset('img_actividades/fi1.jpeg') }}" class="d-block w-100" alt="imagen">
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
                <img src="{{ asset('img_actividades/fi2.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Experiencia única:</h4>
                    <p> Los visitantes pueden disfrutar de un ambiente festivo y acogedor, participando en eventos 
                        culturales y festivos que ofrecen una experiencia inolvidable y enriquecedora.</p>
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
                    <p> Para disfrutar plenamente, se recomienda llegar antes del fin de semana, participar en las novenas, 
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
            <blockquote>"Las fiestas patronales de Providencia, Nariño, son una celebración
                 vibrante que combina fe, cultura y comunidad. Con eventos religiosos, 
                 culturales y recreativos, estas festividades no solo unen a los residentes, sino que 
                también atraen a visitantes, fortaleciendo los lazos comunitarios y promoviendo la economía local."
                <span>- Relata un entrevistado que ha participado del evento.</span>
            </blockquote>
        </div>
    </section>
    <br><br><br>
    @endsection 