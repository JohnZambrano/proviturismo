@extends('layouts.myappRestaurantes')

@section('content')

    <section class="main-hero" data-aos="fade-down">
        <div class="hero-header">
            <h1 class="main-title">🍽️ Restaurante Doña Soco🍽️</h1>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-star">✧</div>
                <div class="decoration-line"></div>
            </div>
            <p class="hero-subtitle">Disfruta de una experiencia culinaria única en nuestras elegantes instalaciones</p>
        </div>
    </section>
            
     
    

    <!-- Sección Descripción -->
    <section id="descripcion" class="section-info" data-aos="fade-up">
        <div class="section-header">
            <h2>🍜Conoce nuestros servicios y la sazón de este lugar🥗</h2>
            <div class="decorative-line"></div>
        </div>
        
        <div class="info-cards">

          <div class="info-card" data-aos="flip-left">
                <i class="fas fa-egg"></i>
                <h3>Desayunos: </h3>
                <p> Aunque Hornado Doña Socorro solo abre los fines de semana,
                     sus desayunos son una delicia que combina tradición y sabor.
                     Disfruta de opciones frescas y locales que te harán sentir como en casa.</p>
            </div>
            
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-drumstick-bite"></i>
                <h3>Almuerzos: </h3>
                <p> Los almuerzos en Hornado Doña Socorro son una experiencia única con su famoso hornado. El cerdo asado,
                     crujiente por fuera y tierno por dentro, es el protagonista de un plato que resalta la auténtica comida local.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-cheese"></i>
                <h3>Cenas: </h3>
                <p>  Para la cena, Hornado Doña Socorro ofrece un ambiente acogedor donde 
                    puedes disfrutar de su delicioso hornado. Es el lugar perfecto para una noche especial,
                     saboreando la tradición culinaria de la región.</p>
            </div>

           
        </div>
    </section>


     <!-- Sección: Menú -->
     <section id="menu" class="container my-5 menu-section">
            <h2 class="text-center menu-title">🍽️Menú</h2>
            <div class="row menu-row">
                <div class="col-md-4 menu-column">
                    <h4 class="menu-category"> 🍲Platos Principales</h4>
                    <ul class="menu-list">
                        <li class="menu-item">Porción hornado + papa y mote- $5.000</li>
                        <li class="menu-item">Porción hornado + papa y mote - $8.000</li>
                        <li class="menu-item">Porción hornado + papa y mote - $10.000</li>
                        <li class="menu-item">Plato libre de Hornado - $100.000</li>
                       
                       
                    </ul>
                </div>
                <div class="col-md-4 menu-column">
                    <h4 class="menu-category">🥤 Bebidas</h4>
                    <ul class="menu-list">
                        <li class="menu-item">Cafe con arepas - $5.000</li>
                        <li class="menu-item">Limonada Natural - $2.000</li>
                        <li class="menu-item">Jugo de Maracuyá artificial- $2.000</li>
                        <li class="menu-item">Jugo de Mora  artificial- $2.000</li>
                    </ul>
                </div>
                <div class="col-md-4 menu-column">
                    <h4 class="menu-category"> 🍨Postres</h4>
                    <ul class="menu-list">
                        <li class="menu-item">No se ofrece</li>
                      
                    </ul>
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



         <!-- Sección de Horarios y Rutas -->
     <section class="rutas-section" id="ubicacion">
        <h2 style="text-align: center; color: var(--primary); margin-bottom: 2rem;">Mapa de localización en el municipio de Providencia-Nariño</h2>
        
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

    
    <section class="section" id="contacto">
    <div class="contenedor-general">
        <h2 style="text-align: center; color: var(--primary); margin-bottom: 2rem;">Puntos de Venta en Providencia</h2>
        
        <div class="venta-card" style="background: white; border-radius: 20px; padding: 2rem; box-shadow: 0 10px 30px rgba(0,0,0,0.1); max-width: 800px; margin: 0 auto;">
            <div class="contacto-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
                <!-- Oficina Principal -->
                <div class="contacto-item" style="text-align: center;">
                    <i class="fas fa-home" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;"></i>
                    <h3 style="color: var(--accent);">Hornado Doña Soco</h3>
                    <p style="margin: 0.5rem 0;">Carrera 5 #6-8<br>Barrio Los Estudiantes</p>
                    <p style="color: var(--primary); font-weight: 500;">
                        <i class="fas fa-clock"></i>Horario: 8:00 AM - 8:00 PM
                        <p>Sabado y Domingo</p>
                    </p>
                </div>

                <!-- Contacto directo -->
                <div class="contacto-item" style="text-align: center;">
                    <i class="fas fa-mobile-alt" style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;"></i>
                    <h3 style="color: var(--accent);">Contacto</h3>
                    <div style="margin: 1rem 0;">
                        <a href="tel:+573001234567" style="text-decoration: none; color: var(--accent); font-size: 1.2rem;">
                            <i class="fas fa-phone-volume"></i> 3106303817
                        </a>
                    </div>
                    <div style="margin: 1rem 0;">
                        <a href="https://wa.me/573106303817" target="_blank" style="text-decoration: none; color: #25D366;">
                            <i class="fab fa-whatsapp"></i> WhatsApp Directo
                        </a>
                    </div>
                </div>
            </div>

            <!-- Métodos de pago -->
            <div style="margin-top: 2rem; text-align: center; border-top: 2px solid var(--cream); padding-top: 1.5rem;">
                <h4 style="color: var(--primary); margin-bottom: 1rem;"><i class="fas fa-credit-card"></i> Medios de Pago</h4>
                <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
                    <span style="background: var(--cream); padding: 0.5rem 1rem; border-radius: 8px;">
                        <i class="fas fa-money-bill-wave"></i> Efectivo
                    </span>
                    <span style="background: var(--cream); padding: 0.5rem 1rem; border-radius: 8px;">
                        <i class="fas fa-qrcode"></i> Nequi
                    </span>
                </div>
            </div>

        </div>

    </div>
</section>

<br><br><br>

@endsection