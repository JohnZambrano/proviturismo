@extends('layouts.myappHoteles')

@section('content')
    
    <section class="main-hero" data-aos="fade-down">
        <div class="hero-header">
        <h1 class="main-title">🌟 Hotel Cami🌟</h1>
        <div class="title-decoration">
            <div class="decoration-line"></div>
            <div class="decoration-star">✧</div>
            <div class="decoration-line"></div>
        </div>
        <p class="hero-subtitle">Relájate en nuestras habitaciones diseñadas para ofrecerte el máximo confort</p>
            </div>
    </section>


    <section id="descripcion" class="section-info" data-aos="fade-up">
        <div class="section-header">
            <h2>🏨Bienvenido a hotel Cami</h2>
            <div class="decorative-line"></div>
        </div>
        <div class="info-cards">
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-snowflake"></i>
                <h3>Comodidades:</h3>
                <p> Ofrece todas las comodidades necesarias para una estancia agradable.</p>
            </div>
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-users"></i>
                <h3>Nuestro Equipo</h3>
                <p>Personas confiables y amables con el cliente.</p>
            </div>
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-leaf"></i>
                <h3>Limpieza:</h3>
                <p> Altos estándares de limpieza y mantenimiento..</p>
            </div>
        </div>
    </section>

    <section id="habitaciones" class="container my-5 menu-section">
        <h2 class="text-center menu-title">🛏️Nuestras Habitaciones</h2>
        <div class="row menu-row">
            <div class="col-md-4 menu-column">
                <h4 class="menu-category">🛏️Habitación Estándar📺</h4>
                <ul class="menu-list">
                    <li class="menu-item">Cama sencilla</li>
                    <li class="menu-item">Cama doble</li>
                    <li class="menu-item">Baño privado</li>
                    <li class="menu-item">Wi-Fi gratuito</li>
                    <li class="menu-item">TV por cable</li>
                </ul>
            </div>
            <div class="col-md-4 menu-column">
                <h4 class="menu-category">🛏️Habitación Superior🍾</h4>
                <ul class="menu-list">
                    <li class="menu-item">No se ofrece</li>
                   
                </ul>
            </div>
            <div class="col-md-4 menu-column">
                <h4 class="menu-category">🛏️Suite de Lujo🚪</h4>
                <ul class="menu-list">
                <li class="menu-item">No se ofrece</li>
                   
                </ul>
            </div>
        </div>
    </section>

    <section id="servicios" class="section-info" data-aos="fade-up">
        <div class="section-header">
            <h2>🛎️Nuestros Servicios</h2>
            <div class="decorative-line"></div>
        </div>
        <div class="info-cards">
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-wifi"></i>
                <h3>Wi-Fi Gratuito</h3>
                <p>Conexión a internet de alta velocidad en todo el hotel.</p>
            </div>
           
           
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-spa"></i>
                <h3>Baño Privado con agua caliente</h3>
                <p>Relájate y sientre la tranquilidad de tener baño privado bastante acogedor.</p>
            </div>
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-tv"></i>
                <h3>TV por cable</h3>
                <p>Mantente informado y entretenido con una gran variedad de canales</p>
            </div>
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-concierge-bell"></i>
                <h3>Servicio de Concierge</h3>
                <p>Asistencia personalizada para tus necesidades.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-hands-wash"></i>
                <h3>Limpieza:</h3>
                <p> Altos estándares de limpieza y mantenimiento.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-snowflake"></i>
                <h3>Ambiente:</h3>
                <p> Tranquilo y auténtico, ideal para desconectar.</p>
            </div>
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

    <section class="rutas-section" id="ubicacion">
        <h2 style="text-align: center; color: var(--primary); margin-bottom: 2rem;">Mapa de localización en el municipio de Providencia-Nariño</h2>
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63795.45603278168!2d-77.4835976!3d1.5564694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e29943234a82c37%3A0x60f5d84d79b4d4d7!2sProvidencia%2C%20Nari%C3%B1o!5e0!3m2!1ses!2sco!4v1718507271719!5m2!1ses!2sco" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </section>

    <section class="section" id="contacto">
        <div class="contenedor-general">
            <h2 style="text-align: center; color: var(--primary); margin-bottom: 2rem;">Contacto y reservas</h2>
            <div class="venta-card" style="background: white; border-radius: 20px; padding: 2rem; box-shadow: 0 10px 30px rgba(0,0,0,0.1); max-width: 800px; margin:0 auto;">
                <div class="contacto-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
                    <div class="contacto-item" style="text-align: center;">
                        <i class="fas fa-map-marker-alt" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;"></i>
                        <h3 style="color: var(--accent);">Dirección</h3>
                        <p style="margin: 0.5rem 0;">Barrio Los Estudiantes<br>Providencia Nariño</p>
                    </div>
                    <div class="contacto-item" style="text-align: center;">
                        <i class="fas fa-envelope" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;"></i>
                        <h3 style="color: var(--accent);">Correo Electrónico</h3>
                        <p style="margin: 0.5rem 0;">
                            <a href="mailto:[correo@ejemplo.com]" style="text-decoration: none; color: var(--accent);">[correo@ejemplo.com]</a>
                        </p>
                    </div>
                    <div class="contacto-item" style="text-align: center;">
                        <i class="fas fa-phone-alt" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;"></i>
                        <h3 style="color: var(--accent);">Teléfono</h3>
                        <p style="margin: 0.5rem 0;">
                            <a href="tel:+[Número de Teléfono]" style="text-decoration: none; color: var(--accent);">3216664258</a>
                        </p>
                    </div>
                            <div style="margin: 1rem 0;">
                                <a href="https://wa.me/573216664258" target="_blank" style="text-decoration: none; color: #25D366;">
                                    <i class="fab fa-whatsapp"></i> WhatsApp Directo
                                </a>
                            </div>
                </div>
            </div>
        </div>
    </section>

    <br><br><br>

 @endsection