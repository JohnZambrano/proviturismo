@extends('layouts.myappCF')

@section('content')

    <div class="welcome-container">
        <div class="welcome-content">
            <h1 class="welcome-title">Conoce las actividades culturales y turisticas de Providencia</h1>
            <p class="welcome-subtitle">🏕️Descubre las actividades fascinantes de nuestro municipio🚴</p>
        </div>
    </div>

  <!-- Sección de Video -->
    <section class="video-section">
        <video autoplay loop class="video-background" controls>
            <source src="{{ asset('videos/Providencia.mp4') }}" type="video/mp4">
            <source src="{{ asset('videos/Providencia.webm') }}" type="video/webm">
            <source src="{{ asset('videos/Providencia.ogv') }}" type="video/ogg">
            Tu navegador no soporta la etiqueta de video.
        </video>
    </section>



<div class="container">
        <div class="card">
        <img src="{{ asset('img_actividades/añov3.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Desfile de años viejos y fiestas de primero de enero:</h3>
                <p>El Desfile de Años Viejos es una tradición muy importante en Providencia, 
                    donde la gente hace figuras que se llaman "años viejos" para despedir el año que ya se va.
                     Estas figuras son de personas famosas, cosas políticas o hasta chistes que hace la gente. 
                     Al final del desfile, se queman las figuras como señal de que se empieza un año nuevo 
                     y se deja todo lo malo atrás. También, hay Fiestas del Primero de Enero, con juegos
                      durante el día y orquestas durante la noche en el parque principal.</p>
                      <a href="/evento_cultural/vista1" class="reserve-button">Ver más</a> 
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img_actividades/carroza2.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Carnaval de negros y blancos:</h3>
                <p>El Carnaval de Negros y Blancos es una de las festividades más importantes en Providencia,
                     la cual refleja la cultura Nariñense. Este carnaval, se celebra desde el 3 hasta el 6 de enero,
                      es una festividad que atrae a locales y turistas de otras regiones dado la belleza de estos carnavales. 
                      Durante el carnaval, el municipio se llena de color y folclor gracias a sus presentaciones, siendo las
                       comparsas y las carrozas los elementos principales de la celebración. Esta festividad es una oportunidad 
                       para que los barrios y veredas se unan y muestren su creatividad a través de danzas y decoraciones en las
                        carrosas.</p>
                        <a href="/evento_cultural/vista2" class="reserve-button">Ver más</a> 
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img_actividades/zapallos.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Ferias agropecuarias del municipio:</h3>
                <p>Las Ferias Agropecuarias de Providencia son muy importantes para el campo, ya que muestran todo
                     lo que se produce en la región, desde ganado hasta productos agrícolas como la papa, yuca, racacha etc. 
                     Por este motivo, es un evento donde se reúnen las personas de las veredas y de la parte urbana del municipio,
                      sirviendo el evento como un punto de encuentro para resaltan todo lo que produce Providencia.
                      se pueden ver exposiciones de animales, productos agrícolas de cosechas, y productos derivados de la leche, 
                      además de competencias donde se premian los mejores productos del año, y mejores animales en cada categoría. 
                      Y para complementar también hay concursos como el bien conocido al mejor disfraz de cuy”.</p>
                      <a href="/evento_cultural/vista3" class="reserve-button">Ver más</a> 
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img_actividades/cromi.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Campeonatos de verano y actividades deportivas:</h3>
                <p>El Campeonato de Verano se hace todos los años en los meses de junio y julio, en el Estadio San Bernardo.
                     Este lugar es muy conocido para los deportes en Providencia. Luego, en agosto, se hacen los campeonatos
                      entre barrios y veredas de microfútbol y baloncesto. Esos se juegan en la cancha del barrio San José, 
                      el cual es un lugar popular para estos torneos debido a que siempre se han realizado ahí,
                       no tanto por su buena estructura sino por tradición. También se juegan en otras canchas, 
                       como la de Betania.  </p>
                       <a href="/evento_cultural/vista4" class="reserve-button">Ver más</a> 
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img_actividades/downhill.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Down Hill en las pistas del municipio de Providencia:</h3>
                <p>El Down Hill se practica en senderos recuperados en las veredas Villa María, Ranchería, y el camino que conecta
                     Villa Nueva con Guadrahuma. Uno de los eventos más importantes fue el Desafío en el año 2020,
                      una competencia organizada en plena pandemia. Estos eventos no solo reúnen a ciclistas locales,
                       sino también a participantes de otros municipios como Guaitarilla, Pasto, Túquerres, Samaniego e Ipiales,
                        que siempre quedan sorprendidos con lo bien que están las pistas y los paisajes de Providencia. </p>
                        <a href="/evento_cultural/vista5" class="reserve-button">Ver más</a> 
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img_actividades/motos2.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Motociclismo en el municipio de Providencia:</h3>
                <p>El motociclismo se hace principalmente en la pista Briceño Racing, pero también se suelen hacer eventos en veredas como San Francisco, Guadrahuma
                     y en ocasiones en otras veredas, pero no es algo fijo de hacerse cada año, en cambio en San Francisco
                      si se realizan cada año celebrando la fiesta de la vereda, Además en las fiestas de cumpleaños del municipio 
                      también se realizan carreras en circuito callejero por las principales calles del municipio.
                       La pista Briceño Racing es más utilizada los fines de semana, pero también se 
                       suelen acercar días particulares a entrenar. Además, hay eventos especiales que caen 
                       en festividades locales, como la del Divino Niño y San Sebastián. En estos días, las 
                       fiestas se mezclan con las competencias de motociclismo. </p>
                       <a href="/evento_cultural/vista6" class="reserve-button">Ver más</a> 
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img_actividades/ani.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Aniversario del municipio:</h3>
                <p>Las fiestas patronales en Providencia, Nariño, son de las celebraciones más importantes del municipio, 
                    dedicadas principalmente a la Santísima Trinidad y al Divino Niño, como dicen los entrevistados. 
                    Esas festividades son una mezcla bastante especial de actos religiosos, actividades culturales y recreativas,
                     lo que las convierte en un evento grande para toda la comunidad.</p>
                     <a href="/evento_cultural/vista7" class="reserve-button">Ver más</a> 
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img_actividades/paz3.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Semana por la paz:</h3>
                <p>La Semana por la Paz es uno de los eventos más importantes en Providencia, Nariño, que refleja el compromiso de la 
                    comunidad con la cultura de paz y la convivencia pacífica. Desde su creación en el año 2015, 
                    este evento ha crecido para convertirse en un espacio integral donde convergen el deporte,
                     la cultura, la educación ambiental y la reflexión sobre los derechos humanos y la reconciliación.
                      En el 2024, Providencia celebrará la novena edición de este importante evento,
                       el cual ha sido liderado por un grupo de jóvenes y 
                       adultos comprometidos con el bienestar de la comunidad.<p>
                      
                       <a href="/evento_cultural/vista8" class="reserve-button">Ver más</a> 
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img_actividades/nov3.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Novenas municipales y por sectores:</h3>
                <p>Las novenas de Navidad son, sin duda, una de las actividades culturales más importantes en Providencia, 
                    representan una oportunidad para fortalecer los lazos entre familias y comunidades de las diferentes 
                    veredas y barrios. Esta tradición profundamente religiosa reúne a vecinos para rezar y cantar 
                    villancicos alrededor del pesebre, pero también es una ocasión para compartir momentos de alegría,
                     sobre todo con los más pequeños de la comunidad. Según la entrevistada: Persona008, una residente local:
                      "Es un tiempo en el que todos nos unimos para celebrar la Navidad y mantener nuestras costumbres vivas". </p>
                     
                      <a href="/evento_cultural/vista9" class="reserve-button">Ver más</a> 
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img_actividades/castillo.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Fiestas y belenes en las diferentes veredas:</h3>
                <p>Estas fiestas y belenes son tradicionalmente celebradas en el municipio de Providencia en cada vereda 
                    e incluso en algunos barrios, las fechas varían según el santo o la región donde se celebre,
                     pero la mayoría de las festividades son entre junio y septiembre. Por ejemplo, la fiesta de la 
                     Virgen de las Lajas en la vereda Santa Lucía, se hace en septiembre, mientras que las fiestas de
                      San Antonio, en El Carrizal, y al Sagrado Corazón de Jesús, en Betania y San Francisco,
                       se celebran en junio. Estas actividades se llevan a cabo en cada vereda, principalmente
                        en sus capillas o iglesias. </p>
                        <a href="/evento_cultural/vista10" class="reserve-button">Ver más</a> 
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img/mapasprovi.jpg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Tour por lugares característicos de Providencia:</h3>
                <p>La ruta ecoturística en Providencia, Nariño, conecta seis sitios naturales a través de siete veredas, 
                    comenzando en el parque central con un desayuno organizado. Los turistas visitan la vereda El Rosario,
                     la vereda Tandayán con su pozo de agua sal y la Cascada del Pensamiento, y la vereda El Salado Grande 
                     con sus pozos de aguasal y corrales de piedra. También exploran la Cascada La Rusia en la vereda El Placer, 
                     el túnel histórico en la vereda La Floresta, y finalizan en el museo de Providencia. El recorrido incluye 
                     actividades culturales como el coro “Cantar es de mi tierra” y una visita a la finca El Nogal para aprender
                      sobre la fibra de fique. </p>
                        <a href="/evento_cultural/vista11" class="reserve-button">Ver más</a> 
            </div>
        </div>

    </div>

@endsection

