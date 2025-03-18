@extends('layouts.myappActividades')

@section('content')

            <section class="main-hero" data-aos="fade-down" style="background: linear-gradient(rgba(34,139,34,0.9), rgba(34,139,34,0.7)), url('https://picsum.photos/1920/600?travel') center/cover;">
                <div class="hero-header">
                    <h1 class="main-title">Downhill en el municipio de Providencia</h1>
                    <div class="title-decoration">
                        <div class="decoration-line"></div>
                        <div class="decoration-star">✧</div>
                        <div class="decoration-line"></div>
                    </div>
                    <div class="hero-date">
                        <i class="fas fa-calendar-star"></i>
                        <p>Prácticalo</p>
                    </div>
                </div>
            </section>

            <br><br>


    <!-- Sección de Video -->
    <section class="video-section">
                <div class="video-container">
                <video autoplay loop muted playsinline class="video-background" controls>
                        <!-- Corregir el type del primer video de "video/m4" a "video/mp4" -->
                        <source src="{{ asset('videos/down.mp4') }}" type="video/mp4">
                        <source src="{{ asset('videos/down.webm') }}" type="video/webm">
                        <source src="{{ asset('videos/down.ogv') }}" type="video/ogg">
                        Tu navegador no soporta la etiqueta de video.
                    </video>
                </div>
            </section>
       

    <!-- Sección Descripción -->
    <section id="descripcion" class="section-info" data-aos="fade-up">
        <div class="section-header">
            <h2>El Downhill es un deporte extremo para amantes de la velocidad🚴</h2>
            <div class="decorative-line"></div>
        </div>
        
        <div class="info-cards">

          <div class="info-card" data-aos="flip-left">
                <i class="fas fa-fire"></i>
                <h3>Descenso de montaña:</h3>
                <p>El downhill es una emocionante disciplina del ciclismo de montaña que 
                    se caracteriza por descensos rápidos y técnicos a través de terrenos empinados y desafiantes.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-bolt"></i>
                <h3>Adrenalina y sangre fria:</h3>
                <p>Los ciclistas deben demostrar habilidades excepcionales de control y equilibrio mientras 
                    navegan por senderos estrechos, rocas, raíces y otros obstáculos naturales.</p>
            </div>
            
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-skull"></i>
                <h3>Diversión a otro nivel:</h3>
                <p>La adrenalina y la velocidad son elementos clave en esta modalidad,
                     haciendo del downhill una experiencia llena de 
                    emoción, aventura y peligro para los amantes de la montaña y la velocidad.</p>
            </div>

        </div>
    </section>

    <!-- Sección Actividades -->
    <section id="actividades" class="activities-section">
        <h2 data-aos="fade-right">🔥🚵Experiencias únicas que vivirás☀️</h2>
        
        <div class="activity-carousel">
            <!-- Carrusel con tarjetas -->
            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/downhill.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Descensos Técnicos y Rápidos: La Esencia del Downhill:</h4>
                    <p>El downhill es una modalidad del ciclismo de montaña que se centra en descensos 
                        rápidos y técnicos. Los ciclistas enfrentan terrenos empinados y obstáculos naturales, 
                        desafiando sus habilidades de control y equilibrio.</p>
                    <div class="icon-group">
                        <i class="fas fa-bolt"></i>
                        <i class="fas fa-skull"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/dwll2.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Aventura y Técnica: El Arte del Downhill:</h4>
                    <p>El downhill combina velocidad y técnica en descensos vertiginosos por terrenos accidentados.
                         Los ciclistas deben maniobrar hábilmente a través de obstáculos naturales,
                          haciendo de cada carrera una aventura emocionante..</p>
                    <div class="icon-group">
                    <i class="fas fa-bolt"></i>
                    <i class="fas fa-skull"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/d3.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Emoción en Cada Descenso: La Magia del Downhill:</h4>
                    <p>En el downhill, cada descenso es una nueva aventura llena de emoción. Los ciclistas deben navegar por 
                        senderos difíciles y empinados, demostrando su destreza y control en cada carrera.</p>
                    <div class="icon-group">
                    <i class="fas fa-bolt"></i>
                    <i class="fas fa-skull"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/dw1.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Adrenalina en la Montaña: La Velocidad del Downhill:</h4>
                    <p>En el downhill, los ciclistas descienden a gran velocidad por senderos montañosos
                         llenos de rocas y raíces. Esta disciplina requiere precisión y valentía, ofreciendo
                          una experiencia llena de adrenalina.</p>
                    <div class="icon-group">
                    <i class="fas fa-bolt"></i>
                    <i class="fas fa-skull"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/dwll1.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Emoción en Cada Descenso: La Magia del Downhill:</h4>
                    <p>En el downhill, cada descenso es una nueva aventura llena de emoción. Los ciclistas deben navegar por 
                        senderos difíciles y empinados, demostrando su destreza y control en cada carrera.</p>
                    <div class="icon-group">
                    <i class="fas fa-bolt"></i>
                    <i class="fas fa-skull"></i>
                    </div>
                </div>
            </div>


            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/dw2.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Aventura y Técnica: El Arte del Downhill:</h4>
                    <p>El downhill combina velocidad y técnica en descensos vertiginosos por terrenos accidentados.
                         Los ciclistas deben maniobrar hábilmente a través de obstáculos naturales,
                          haciendo de cada carrera una aventura emocionante..</p>
                    <div class="icon-group">
                    <i class="fas fa-bolt"></i>
                    <i class="fas fa-skull"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/dw7.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Emoción en Cada Descenso: La Magia del Downhill:</h4>
                    <p>En el downhill, cada descenso es una nueva aventura llena de emoción. Los ciclistas deben navegar por 
                        senderos difíciles y empinados, demostrando su destreza y control en cada carrera.</p>
                    <div class="icon-group">
                    <i class="fas fa-bolt"></i>
                    <i class="fas fa-skull"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
                <img src="{{ asset('img_actividades/dw3.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Desafío en la Montaña: La Emoción del Downhill:</h4>
                    <p>Descender a toda velocidad por montañas empinadas es la esencia del downhill. Esta disciplina 
                        del ciclismo de montaña desafía a los ciclistas con terrenos difíciles y requiere un control
                         excepcional de la bicicleta.</p>
                    <div class="icon-group">
                    <i class="fas fa-bolt"></i>
                    <i class="fas fa-skull"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/dw4.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Velocidad y Precisión: El Desafío del Downhill:</h4>
                    <p>El downhill es una disciplina del ciclismo de montaña que combina velocidad y precisión. 
                        Los ciclistas descienden por terrenos empinados y técnicos, enfrentando obstáculos naturales
                         con gran habilidad..</p>
                    <div class="icon-group">
                    <i class="fas fa-bolt"></i>
                    <i class="fas fa-skull"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/dw8.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Aventura y Técnica: El Arte del Downhill:</h4>
                    <p>El downhill combina velocidad y técnica en descensos vertiginosos por terrenos accidentados.
                         Los ciclistas deben maniobrar hábilmente a través de obstáculos naturales,
                          haciendo de cada carrera una aventura emocionante..</p>
                    <div class="icon-group">
                    <i class="fas fa-bolt"></i>
                    <i class="fas fa-skull"></i>
                    </div>
                </div>
            </div>


            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/dwll3.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Aventura y Técnica: El Arte del Downhill:</h4>
                    <p>El downhill combina velocidad y técnica en descensos vertiginosos por terrenos accidentados.
                         Los ciclistas deben maniobrar hábilmente a través de obstáculos naturales,
                          haciendo de cada carrera una aventura emocionante..</p>
                    <div class="icon-group">
                    <i class="fas fa-bolt"></i>
                    <i class="fas fa-skull"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/d2.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Dominando la Montaña: La Experiencia del Downhill:</h4>
                    <p>El downhill ofrece una experiencia única de velocidad y control en terrenos montañosos. 
                        Los ciclistas descienden a gran velocidad, enfrentando desafíos naturales que ponen
                         a prueba sus habilidades</p>
                    <div class="icon-group">
                    <i class="fas fa-bolt"></i>
                    <i class="fas fa-skull"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/dw5.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Emoción en Cada Descenso: La Magia del Downhill:</h4>
                    <p>En el downhill, cada descenso es una nueva aventura llena de emoción. Los ciclistas deben navegar por 
                        senderos difíciles y empinados, demostrando su destreza y control en cada carrera.</p>
                    <div class="icon-group">
                    <i class="fas fa-bolt"></i>
                    <i class="fas fa-skull"></i>
                    </div>
                </div>
            </div>

           

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_actividades/dw6.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Dominando la Montaña: La Experiencia del Downhill:</h4>
                    <p>El downhill ofrece una experiencia única de velocidad y control en terrenos montañosos. 
                        Los ciclistas descienden a gran velocidad, enfrentando desafíos naturales que ponen
                         a prueba sus habilidades</p>
                    <div class="icon-group">
                    <i class="fas fa-bolt"></i>
                    <i class="fas fa-skull"></i>
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
                <li><i class="fas fa-bolt"></i> Tener una bicicleta adecuada para descensos y saltos</li>
                <li><i class="fas fa-tshirt"></i> Ropa cómoda</li>
                <li><i class="fas fa-skull"></i> Tener cierta maestría en el descenso de pistas empinadas</li>
            </ul>
            <blockquote>
                "Practicar downhill es una de las experiencias más emocionantes y 
                gratificantes que he tenido. La sensación de descender a toda velocidad 
                por senderos empinados y técnicos es incomparable"
                <span>- Relata un entrevistado que ha participado de este deporte.</span>
            </blockquote>
        </div>
    </section>

    <br><br><br>
    @endsection 