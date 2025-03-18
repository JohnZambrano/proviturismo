<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transipiales - Transporte en Providencia Nariño</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   
    <link rel="stylesheet" href="{{ asset('css/styleswelcome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/transporte.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reseñas.css') }}">


    <nav class="nav-bar">
        <a href="#" class="logo">TRANSIPIALES S.A</a>
        <div class="nav-toggle" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="nav-links">
            <a href="/" class="nav-link">Página Principal</a>
            <a href="/servicios/servicios" class="nav-link">Panel Servicios</a>
            <br><br>
            <a href="#inicio" class="nav-link">Inicio</a>
            <a href="#servicios" class="nav-link">Servicios</a>
            <a href="#rutas" class="nav-link">Rutas</a>
            <a href="#conductores" class="nav-link">Conductores</a>
            <a href="#contacto" class="nav-link">Contacto y reservas</a>
        </div>
    </nav>
<br>
</head>
<body>
    
<div class="contenedor-general">
    <br><br><br>

    <section class="hero" id="inicio">
    <br><br>
        <div style="color: white; max-width: 600px;">
            <br><br><br>
            <h1 style="font-size: 3rem; margin-bottom: 1rem;">Transporte seguro en Providencia Nariño</h1>
            <p style="font-size: 1.2rem;">Conectamos comunidades con excelencia</p>
            <br><br><br><br>
            <a href="https://transipialesvirtual.com/" class="btn-primary" role="button" aria-label="Visitar sitio oficial TransIpiales">
                <i class="fas fa-bus"></i>
                <span>Visitar página oficial</span>
            </a>
        </div>
    </section>

    <section class="section" id="servicios">
        <h2 style="text-align: center; margin-bottom: 3rem;">Nuestros Servicios</h2>
        <div class="grid-3">
            <div class="service-card">
                <h3><i class="fas fa-truck-moving"></i> Carga General</h3>
                <p>Transporte seguro de mercancías.</p>
            </div>
            <div class="service-card">
                <h3><i class="fas fa-users"></i> Pasajeros</h3>
                <p>Transporte intermunicipal con unidades modernas</p>
            </div>
            <div class="service-card">
                <h3><i class="fas fa-box-open"></i> Paquetería</h3>
                <p>Envíos express a toda la región</p>
            </div>
        </div>
    </section>

         <!-- Sección de Horarios y Rutas -->
    <section class="rutas-section" id="rutas">
        <h2 style="text-align: center; color: var(--primary); margin-bottom: 2rem;">Horarios y Rutas</h2>
        
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63795.45603278168!2d-77.4835976!3d1.5564694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e29943234a82c37%3A0x60f5d84d79b4d4d7!2sProvidencia%2C%20Nari%C3%B1o!5e0!3m2!1ses!2sco!4v1718507271719!5m2!1ses!2sco" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
            </iframe>
        </div>

        <div class="horarios-grid">
            <div class="ruta-card">
                <h3 style="color: var(--primary);"><i class="fas fa-route"></i> Ruta Providencia - Pasto</h3>
                <div class="horario-item">
                    <h3 style="color: var(--primary);">Hora de salida: </h3>
                    <span>Lunes a Viernes</span>
                    <span>5:00 AM y 3:00 PM</span>
                </div>
                <div class="horario-item">
                    <h3 style="color: var(--primary);">Hora de salida: </h3>
                    <span>Sábados y Domingo</span>
                    <span>5:00 AM y 2:00 PM</span>
                </div>
                <p style="margin-top: 1rem;"><i class="fas fa-map-marker-alt"></i> Paradas principales: Mercado Central, Hospital, Terminal</p>
                <p style="margin-top: 1rem;"><i class="fas fa-bus"></i> Vehículos: Busetas 12 puestos</p>
            </div>

            <div class="ruta-card">
                <h3 style="color: var(--primary);"><i class="fas fa-route"></i> Ruta Pasto - Providencia</h3>
                <div class="horario-item">
                    <h3 style="color: var(--primary);">Hora de salida: </h3>
                    <span>Lunes a Viernes</span>
                    <span>10:00 AM Y 4:00 PM</span>
                </div>
                <div class="horario-item">
                    <h3 style="color: var(--primary);">Hora de salida: </h3>
                    <span>Sábados y Domingos</span>
                    <span>11:00 AM y 3:00 PM</span>
                </div>
                <p style="margin-top: 1rem;"><i class="fas fa-map-marker-alt"></i> Paradas principales: Parque Central, Hospital, Terminal</p>
                <p style="margin-top: 1rem;"><i class="fas fa-bus"></i> Vehículos: Busetas 12 puestos</p>
            </div>

            <div class="ruta-card">
                <h3 style="color: var(--primary);"><i class="fas fa-truck"></i> Servicio de Carga</h3>
                <div class="horario-item">
                    <span>Recolecciones</span>
                    <span>Lun-Sab 8:00 AM - 12:00 PM</span>
                </div>
                <div class="horario-item">
                    <span>Entregas</span>
                    <span>Lun-Vie 8:00 PM - 6:00 PM</span>
                </div>
                <p style="margin-top: 1rem;"><i class="fas fa-map-pin"></i> Zona de cobertura: Radio 50km</p>
            </div>
        </div>
    </section>


     <!-- Sección Nuestros Conductores -->
     <section class="conductores-section" id="conductores">
        <div class="card-conductores">
            <div class="header-conductores">
                <i class="fas fa-user-clock fa-2x" style="color: #28b463;"></i>
                <div>
                    <h2 style="color: #2c3e50; margin-bottom: 0.5rem;">Nuestros Conductores Certificados</h2>
                    <span class="badge-ley">
                        <i class="fas fa-file-contract"></i> Res. 1213/2009
                    </span>
                </div>
            </div>

         <div class="grid-horarios">
                <!-- Conductor 1 -->
                <div class="item-conductor">
                    <div class="nombre-conductor">
                        <i class="fas fa-id-badge"></i> Conductor 1
                    </div>
                    <div class="horario-grafico">
                        <div class="barra-horario" style="left: 10%; width: 40%;" 
                            data-tooltip="Turno: 6:00 AM - 2:00 PM"></div>
                        <div class="barra-horario" style="left: 55%; width: 30%; background: #f1c40f;" 
                            data-tooltip="Descanso: Requerido por Res. 1213/2009"></div>
                    </div>
                    <div style="display: flex; justify-content: space-between; color: #6c757d; font-size: 0.9rem;">
                        <span><i class="fas fa-route"></i> Rutas variables</span>
                        <div style="margin: 1rem 0;">
                        <a href="https://wa.me/573111907435" target="_blank" style="text-decoration: none; color: #25D366;">
                            <i class="fab fa-whatsapp"></i> WhatsApp Directo
                        </a>
                    </div>
                    </div>
                </div>

                <!-- Conductor 2 -->
                <div class="item-conductor">
                    <div class="nombre-conductor">
                        <i class="fas fa-id-badge"></i> Conductor 2
                    </div>
                    <div class="horario-grafico">
                        <div class="barra-horario" style="left: 10%; width: 40%;" 
                            data-tooltip="Turno: 6:00 AM - 2:00 PM"></div>
                        <div class="barra-horario" style="left: 55%; width: 30%; background: #f1c40f;" 
                            data-tooltip="Descanso: Requerido por Res. 1213/2009"></div>
                    </div>
                    <div style="display: flex; justify-content: space-between; color: #6c757d; font-size: 0.9rem;">
                        <span><i class="fas fa-route"></i> Rutas variables</span>
                        <div style="margin: 1rem 0;">
                        <a href="https://wa.me/573209096642" target="_blank" style="text-decoration: none; color: #25D366;">
                            <i class="fab fa-whatsapp"></i> WhatsApp Directo
                        </a>
                    </div>
                    </div>
                </div>

                 <!-- Conductor 3 -->
                 <div class="item-conductor">
                    <div class="nombre-conductor">
                        <i class="fas fa-id-badge"></i> Conductor 3
                    </div>
                    <div class="horario-grafico">
                        <div class="barra-horario" style="left: 10%; width: 40%;" 
                            data-tooltip="Turno: 6:00 AM - 2:00 PM"></div>
                        <div class="barra-horario" style="left: 55%; width: 30%; background: #f1c40f;" 
                            data-tooltip="Descanso: Requerido por Res. 1213/2009"></div>
                    </div>
                    <div style="display: flex; justify-content: space-between; color: #6c757d; font-size: 0.9rem;">
                        <span><i class="fas fa-route"></i> Rutas variables</span>
                        <div style="margin: 1rem 0;">
                        <a href="https://wa.me/573127698613" target="_blank" style="text-decoration: none; color: #25D366;">
                            <i class="fab fa-whatsapp"></i> WhatsApp Directo
                        </a>
                    </div>
                    </div>
                </div>
                 
            </div>

          </div>

                <div style="margin-top: 1.5rem; text-align: center; color: #6c757d; font-size: 0.9rem;">
                    <i class="fas fa-info-circle"></i> Horarios regulados según normativa nacional de transporte
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


    <section class="section" id="contacto">
    <div class="contenedor-general">
        <h2 class="titulo-seccion">Puntos de Venta en Providencia</h2>
        
        <div class="venta-card">
            <div class="contacto-grid">
                <!-- Oficina Principal -->
                <div class="contacto-item">
                    <i class="fas fa-building icono-contacto"></i>
                    <h3>Punto de Empresa TransIpiales</h3>
                    <p class="direccion">Carrera 5 #10-22<br>Barrio Libertad</p>
                    <p class="horario">
                        <i class="fas fa-clock"></i> Horario: 6:00 AM - 8:00 PM
                    </p>
                </div>

                <!-- Contacto directo -->
                <div class="contacto-item">
                    <i class="fas fa-mobile-alt icono-contacto"></i>
                    <h3>Reservas y Emergencias</h3>
                    <div class="contacto-telefono">
                        <a href="tel:+573001234567" class="enlace-telefono">
                            <i class="fas fa-phone-volume"></i> 300 123 4567
                        </a>
                    </div>
                    <div class="contacto-whatsapp">
                        <a href="https://wa.me/573001234567" target="_blank" class="enlace-whatsapp">
                            <i class="fab fa-whatsapp"></i> WhatsApp Directo
                        </a>
                    </div>
                </div>
            </div>

            <!-- Métodos de pago -->
            <div class="medios-pago">
                <h4><i class="fas fa-credit-card"></i> Medios de Pago</h4>
                <div class="contenedor-medios-pago">
                    <span class="medio-pago">
                        <i class="fas fa-money-bill-wave"></i> Efectivo
                    </span>
                    <span class="medio-pago">
                        <i class="fas fa-qrcode"></i> Nequi
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>


 </div>
 <footer class="footer">
        <div class="footer-container">
        <div class="footer-info">
                <img src="{{ asset('img/LogoProviTurismo.png') }}" alt="ProviTurismo Logo" class="footer-logo">
                <p>🌄Transformando el turismo con experiencias auténticas y sostenibles.</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/profile.php?id=100009479425407&locale=es_LA"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-tiktok"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/@ProviTurismoNari%C3%B1o"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-links">
                <h4>📌Enlaces Rápidos</h4>
                <ul>
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/lugar_turistico/index">Destinos</a></li>
                    <li><a href="/servicios/servicios">Servicios</a></li>
                    <li><a href="https://municipiodeprovidencia.blogspot.com/2012/12/presentacion-guanama-chiquito.html">Blog</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>🌐Servicios</h4>
                <ul>
                    <li><a href="/evento_cultural/vista11">Tours Guiados</a></li>
                    <li><a href="/noticias">Noticias</a></li>
                    <li><a href="https://www.viajarenverano.com/providencia-narino/">Experiencias</a></li>
                    <li><a href="/about/municipio">Municipio</a></li>
                </ul>
            </div>
            <div class="text-center py-3 border-top border-secondary">
                <p class="mb-0">&copy; {{ date('Y') }} ProviTurismo. Todos los derechos reservados.</p>
            </div>

            <div style="margin: 1rem 0;">
                 <a href="https://wa.me/573209911620" target="_blank" style="text-decoration: none; color: #25D366;">
                    <i class="fab fa-whatsapp"></i> WhatsApp Directo
                 </a>
            </div>
        </div>
            
    </footer>

    <script>
       function toggleMenu() {
        document.querySelector('.nav-toggle').classList.toggle('active');
        document.querySelector('.nav-links').classList.toggle('show');
    }
    </script>
</body>
</html>