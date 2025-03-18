@extends('layouts.myappCF')

@section('content')

    <div class="welcome-container">
        <div class="welcome-content">
            <h1 class="welcome-title">Conoce los Atractivos Turísticos de Providencia</h1>
            <p class="welcome-subtitle">🌲Descubre los lugares más hermosos y fascinantes de nuestro municipio🌿</p>
        </div>
    </div>

  <!-- Sección de Video -->
    <section class="video-section">
        <video autoplay loop class="video-background" controls>
            <source src="{{ asset('videos/ProVideo.mp4') }}" type="video/mp4">
            <source src="{{ asset('videos/ProVideo.webm') }}" type="video/webm">
            <source src="{{ asset('videos/ProVideo.ogv') }}" type="video/ogg">
            Tu navegador no soporta la etiqueta de video.
        </video>
    </section>



<div class="container">
        <div class="card">
        <img src="{{ asset('img/SaladoBellaco.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Centro ecoturístico salado Bellaco</h3>
                <p>El Centro Ecoturístico Salado Bellaco ubicado en la vereda La Floresta es un lugar
                   importante para el turismo en Providencia, Nariño. Es conocido por su pozo de agua salada
                   y una capilla creada en honor a la Virgen de la Divina Providencia.</p>
                   <a href="/lugar_turistico/vista1" class="reserve-button">Ver más</a> 
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img_lugares/td6.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Sendero Ecoturístico El Común</h3>
                <p>El Común es un lugar muy tranquilo rodeado de naturaleza.
                     Es un espacio abierto para que cualquier persona pueda disfrutarlo. 
                     Lo más interesante de este sitio son sus pozos de agua salada algo que no es muy común
                     en otras zonas. La vegetación ha crecido sin control haciendo 
                     que sea un área montañosa y llena de paz.</p>
                     <a href="/lugar_turistico/vista2" class="reserve-button">Ver más</a> 
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img/pikacho.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Las Torres mirador</h3>
                <p>Las Torres, también llamadas Las Torres de San Francisco y Germán son un lugar conocido
                     en Providencia, Nariño. Están entre las veredas de San Francisco, Germán y el Carrizal
                      en la parte alta del municipio a unos 3000 metros sobre el nivel del mar. Este sitio es
                       famoso por las vistas tan bonitas que ofrece desde la parte más alta del lugar se puede 
                       ver una vegetación amplia y verde que parece no tener fin.</p>
                       <a href="/lugar_turistico/vista3" class="reserve-button">Ver más</a> 
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img/Tola.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Cerro la tola</h3>
                <p>EL Cerro la Tola queda cerca del pueblo, se puede decir que a unos 200 o 250 metros.
                     Y es de esos sitios que tienen lo mejor de 2 mundos: una parte montañosa y otra parte plana
                      donde se puede relajar porque la naturaleza ahí es tranquila. 
                       En especial, en julio y todo agosto, es cuando se llena de vida, 
                       los vientos del verano llegan y todos salen a elevar cometas. </p>
                       <a href="/lugar_turistico/vista4" class="reserve-button">Ver más</a> 
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img/LaVirgen.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Capilla de nuestra señora del Rosario vereda Santa Lucia, mirador</h3>
                <p>La Capilla de la Virgen de las Lajas situada en la vereda Santa Lucía es un lugar de gran devoción 
                    y atractivo en el municipio de Providencia, Nariño. La capilla se encuentra estratégicamente al borde de la carretera. 
                    Desde allí se puede disfrutar de una impresionante vista panorámica de las montañas y la abundante vegetación 
                    que caracteriza la región. </p>
                    <a href="/lugar_turistico/vista5" class="reserve-button">Ver más</a> 
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img/BriceñoRacing.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Pista Briceño Racing</h3>
                <p>La Pista Briceño Racing es una pista de veloarena para motos ubicada en la vereda La Floresta, 
                    en el municipio de Providencia. Es un lugar popular entre los entusiastas del motociclismo, 
                    ofreciendo un terreno desafiante y emocionante para carreras y prácticas. Regularmente,
                     se organizan eventos y competencias en la Pista Briceño Racing, atrayendo a pilotos de diferentes
                      regiones. Estos eventos no solo fomentan el deporte del motociclismo, sino que también 
                      crean un ambiente de camaradería y competencia sana entre los participantes.</p>
                      <a href="/lugar_turistico/vista6" class="reserve-button">Ver más</a> 
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img/Estadio.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Estadio San Bernardo</h3>
                <p>El Estadio San Bernardo es un lugar especial para la comunidad de Providencia. 
                    Sobre todo, para los jóvenes y los que aman un deporte como el fútbol.
                     A pesar de no tener tribunas ni techo, es un sitio donde las personas se encuentran para disfrutar. 
                       El estadio es grande. El terreno amplio permite realizar tanto torneos locales como partidos
                        entre amigos lo que crea un ambiente de sana competencia y amistad.</p>
                        <a href="/lugar_turistico/vista7" class="reserve-button">Ver más</a> 
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img/Gruta.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Gruta Barrio Lourdes</h3>
                <p>La Gruta de la Virgen de Lourdes, ubicada en el barrio Lourdes, es uno de los sitios más especiales
                     y tradicionales de Providencia. Este espacio fue construido con piedras recogidas por los mismos
                      habitantes lo que le da un carácter único y rústico. Además de su singular construcción, la gruta destaca por su hermosa 
                         cruz tallada en piedra y la urna que guarda la imagen de la Virgen adornada constantemente por flores de los
                          fieles que la visitan.</p>
                          <a href="/lugar_turistico/vista8" class="reserve-button">Ver más</a> 
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img/LaProfundidad.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>La Profundidad</h3>
                <p>La Profundidad se encuentra en el municipio de Samaniego, que está cerca de Providencia, Nariño. 
                    Está situado entre las veredas Villaflor, Doñana y El Cansino. Debido a su asombrosa belleza natural
                     y el ambiente tranquilo que ofrece este sitio ha ganado popularidad entre los locales y los visitantes.
                     El paisaje se destaca por sus montañas que se entrelazan formando un túnel natural de roca además de la 
                     riqueza en fauna y flora que lo rodea. </p>
                     <a href="/lugar_turistico/vista9" class="reserve-button">Ver más</a> 
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img/cueva.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Cueva en la vereda la Floresta</h3>
                <p>La Cueva de la vereda La Floresta es un sitio cargado de misterio y leyendas,
                     profundamente relacionado con la historia de Providencia, Nariño. Este lugar,
                      ubicado cerca de la finca de la señora Emérita Vallejos, ha sido un punto de interés
                       para los habitantes desde tiempos antiguos. </p>
                       <a href="/lugar_turistico/vista10" class="reserve-button">Ver más</a> 
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img/CascadaRancheria.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Cascada vereda la Ranchería</h3>
                <p>La Chorrera ubicada en la vereda Ranchería de Providencia, Nariño es un tesoro natural que, 
                    aunque poco conocido es un destino lleno de belleza y tranquilidad. Se trata de una cascada
                     que gracias a su caída forma una poceta natural convirtiéndose en un lugar perfecto para darse 
                     un baño refrescante especialmente en días calurosos. </p>
                     <a href="/lugar_turistico/vista11" class="reserve-button">Ver más</a> 
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img/LaRusia.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Cascada la Rusia vereda el Placer</h3>
                <p>La Chorrera ubicada en la vereda el Placer de Providencia, Nariño es un tesoro natural que, 
                    aunque poco conocido es un destino lleno de belleza y tranquilidad. Se trata de una cascada
                     que gracias a su caída forma una poceta natural convirtiéndose en un lugar perfecto para darse 
                     un baño refrescante especialmente en días calurosos. </p>
                     <a href="/lugar_turistico/vista12" class="reserve-button">Ver más</a> 
            </div>
        </div>

         <div class="card">
         <img src="{{ asset('img/Ruinas.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Ruinas en la vereda El Rosario</h3>
                <p>Las ruinas de El Rosario parecen provenientes de otra época. En el municipio de Providencia, 
                    se hallan lo que parecen ser 3 edificaciones con cuatro muros cada una. Estas estructuras,
                     en las que se emplearon piedras labradas con precisión milimétrica, y que claramente no son 
                     de origen natural, parecen narrar una historia no muy reciente y que, según se concluye de las 
                     conversaciones que se sostienen con sus actuales y antiguos habitantes, es conocida solo
                      a medias y a través de algunos rumores.</p>
                      <a href="/lugar_turistico/vista13" class="reserve-button">Ver más</a> 
            </div>
        </div>


        <div class="card">
         <img src="{{ asset('img_actividades/m3.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Museo de Providencia</h3>
                <p>El Museo de Providencia, ubicado en el corazón del municipio de Providencia, Nariño, es un espacio 
                    dedicado a preservar y compartir la rica historia y cultura de la región. Este museo ofrece a los
                     visitantes una oportunidad única para explorar las raíces de Providencia a través de sus diversas 
                     exhibiciones y colecciones.</p>
                      <a href="/lugar_turistico/vista14" class="reserve-button">Ver más</a> 
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img_lugares/pos5.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Pozos de sal Salado Grande</h3>
                <p>Los Pozos de Sal Salado Grande es un lugar tranquilo y lleno de naturaleza, 
                    ubicado en la vereda El Salado, a aproximadamente 30 minutos del municipio de Providencia, 
                    Nariño. Su nombre proviene de la alta concentración de sal en sus aguas, lo que los hace
                     únicos en la región. Este sitio es de acceso libre, permitiendo que cualquier 
                     persona pueda visitarlo y disfrutar de su entorno natural.</p>
                     <a href="/lugar_turistico/vista15" class="reserve-button">Ver más</a> 
            </div>
        </div>
    </div>

@endsection

