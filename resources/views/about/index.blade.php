<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros - Proviturismo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    
    <!-- Estilos css-->
    <link rel="stylesheet" href="{{ asset('css/about.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    
   
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
        <br><br><br><br>  
               <div class="logo-container">
                    <img src="{{ asset('img/log.png') }}" alt="ProviTurismo Logo" class="footer-logo">
                </div>
            <h1>Descubre ProviTurismo</h1>
            <p style="color: black;">🚗Tu ventana al turismo sostenible y las experiencias auténticas🌟</p>
            <br><br><br><br>

          <!-- Botones modificados -->
        <div class="button-container">
            <a href="/" class="btn btn-custom">
                Página Principal
            </a>

            <a href="/dashboard" class="btn btn-custom">
                Panel Principal
            </a>
        </div>
           


                <!-- Optional CSS for hover effect on buttons -->
                <style>
        .btn-custom {
            background-color: #2e86c1  !important;
            color: white !important;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: none;
            display: inline-block;
            margin: 8px;
            font-size: 16px;
            text-align: center;
        }

        .btn-custom:hover {
            background-color: #2c5282 !important;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        /* Responsive para móviles */
        @media (max-width: 768px) {
            .button-container {
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 100%;
            }
            
            .btn-custom {
                width: 90%;
                max-width: 300px;
                padding: 12px 20px;
                margin: 8px 0;
                font-size: 14px;
            }
        }
    </style>

        </div>
        <br><br>
    </section>
    <br><br>

    <!-- Historia Section -->
    <section class="history-section">
    <br><br>
        <div class="container">
            <h2 class="section-title">Sobre nosotros:</h2>
            <div class="history-cards">
                <div class="history-card">
                <img src="{{ asset('img/FondoProvi.jpeg') }}" class="d-block w-100" alt="...">
                    <div class="history-card-icon">
                        <i class="fas fa-landmark"></i>
                    </div>
                    <div class="history-card-content">
                        <h3>Fundación</h3>
                        <p>Este proyecto nace como idea para propuesta de grado,
                             pero con la iniciativa de siempre dar a conocer al municipio de Providencia.</p>
                    </div>
                </div>
                <div class="history-card">
                <img src="{{ asset('img/señalizacionprovi.jpg') }}" class="d-block w-100" alt="...">
                    <div class="history-card-icon">
                        <i class="fas fa-compass"></i>
                    </div>
                    <div class="history-card-content">
                        <h3>Misión</h3>
                        <p>Promovemos el turismo responsable y las experiencias auténticas para nuestros visitantes.</p>
                    </div>
                </div>
                <div class="history-card">
                <img src="{{ asset('img/Providencia.jpg') }}" class="d-block w-100" alt="...">
                    <div class="history-card-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="history-card-content">
                        <h3>Visión</h3>
                        <p>Ser líderes en turismo sostenible y experiencias culturales únicas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contacto Section -->
    <section class="contact-section">
        <div class="contact-container">
            <div class="contact-info">
                <h2>Encuentranos:</h2>
                <div class="contact-info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h4>Dirección</h4>
                        <p>Vereda la Floresta-Providencia-Nariño</p>
                    </div>
                </div>
                <div class="contact-info-item">
                    <i class="fas fa-clock"></i>
                    <div>
                        <h4>Horario de Atención</h4>
                        <p>Lun-Vie: 9:00 a.m. a 5:00 p.m.</p>
                        <p>Sáb-Dom: 9:00 a.m. a 12:00 p.m.</p>
                    </div>
                </div>
                <div class="contact-info-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <h4>Teléfono</h4>
                        <p>+57 3209911620</p>
                    </div>
                </div>
                <div class="contact-info-item">
                    <i class="fas fa-laptop-code"></i>
                    <div>
                        <h4>Ingeniero de Sistemas</h4>
                        <p>John Jairo Zambrano</p>
                    </div>
                    
                </div>
                <div style="margin: 1rem 0;">
                    <a href="https://wa.me/573209911620" target="_blank" style="text-decoration: none; color: #000000;">
                        <i class="fab fa-whatsapp"></i> <b><i>WhatsApp Directo</i></b>
                    </a>
                </div>
            </div>

        <!--Formulario de contacto-->

        <div class="contact-form">
            <h2>Contáctanos</h2>
            <form id="contactForm" action="{{ route('contacto.enviar') }}" method="POST">
                @csrf {{-- Directiva CSRF --}}

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido" name="apellido" placeholder="Tu apellido" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Tu email" required>
                </div>
                <div class="form-group">
                    <label for="mensaje">Mensaje</label>
                    <textarea id="mensaje" name="mensaje" rows="4" placeholder="Tu mensaje" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Enviar Mensaje</button>

                @if(session('success'))
                    <div class="alert alert-success" style="color: green; margin-top: 10px;">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger" style="color: red; margin-top: 10px;">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>
        </div>
        </div>

    </section>



    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-info">
                <img src="{{ asset('img/LogoProviTurismo.png') }}" alt="ProviTurismo Logo" class="footer-logo">
                <br><br>
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
                <p class="mb-0">&copy; {{ date('Y') }} ProviTurismo. Todos los derechos reservados.<br/><br/><br/><b>  Versión</b> 1.0.0
                <span class="px-2">|</span>
                <i class="fas fa-clock"></i> <span id="current-time"></span></p>
            </div>

            

            <div style="margin: 1rem 0;">
                 <a href="https://wa.me/573209911620" target="_blank" style="text-decoration: none; color: #25D366;">
                    <i class="fab fa-whatsapp"></i> WhatsApp Directo
                 </a>
            </div>

            <a href="https://www.digitalocean.com/?refcode=87c26049ef2e&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.cdn.digitaloceanspaces.com/WWW/Badge%201.svg" alt="DigitalOcean Referral Badge" /></a>
        </div>
            
    </footer>

    <script>
        // Animación de elementos al hacer scroll
        function reveal() {
            const reveals = document.querySelectorAll('.history-card, .contact-info-item');
            reveals.forEach(element => {
                const windowHeight = window.innerHeight;
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < windowHeight - elementVisible) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }
            });
        }

        window.addEventListener('scroll', reveal);
        reveal();

        // Animación del formulario
        const formInputs = document.querySelectorAll('.form-group input, .form-group textarea');
        formInputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('active');
            });
            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.parentElement.classList.remove('active');
                }
            });
        });


    // Function to animate buttons
    function animateButton(button) {
        button.style.transform = "scale(1.1) translateY(-10px)";
        button.style.backgroundColor = "#1abc9c";
        button.style.opacity = "0.8";
        setTimeout(() => {
            button.style.transform = "scale(1) translateY(0)";
            button.style.backgroundColor = "#2980b9";
            button.style.opacity = "1";
        }, 500);
    }

    // Add event listeners to buttons
    document.getElementById("btn1").addEventListener("click", function(event) {
        event.preventDefault();
        animateButton(this);
        setTimeout(() => {
            window.location.href = this.href;
        }, 500);
    });

    document.getElementById("btn2").addEventListener("click", function(event) {
        event.preventDefault();
        animateButton(this);
        setTimeout(() => {
            window.location.href = this.href;
        }, 500);
    });
    
    </script>