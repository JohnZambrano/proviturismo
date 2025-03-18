@extends('layouts.myappCF')
<br><br>
@section('content')
        <br><br>
           <!-- Contenedor principal con un nombre único -->
            <div id="unique-container" style="background-color: #f9f9f9; padding: 30px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 800px; margin: auto; opacity: 0; animation: unique-fade-in 0.5s ease-in-out forwards;">

                    <!-- Card para el título con un nombre único -->
                    <div id="unique-title-card" style="background-color: #1a1a2e; border-radius: 15px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); text-align: center; margin-bottom: 20px; opacity: 0; animation: unique-fade-in 0.5s ease-in-out 0.2s forwards;">
                        <h2 style="color: #ffffff; font-size: 30px; font-weight: bold; margin: 0;">Conoce los restaurantes de Providencia-Nariño</h2>
                    </div>

                    <!-- Card para la información general con un nombre único -->
                    <div id="unique-info-card" style="background-color: #1a1a2e; border-radius: 15px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); text-align: center; opacity: 0; animation: unique-fade-in 0.5s ease-in-out 0.4s forwards;">
                        <h3 style="color: #ffffff; font-family: Arial, sans-serif; margin-bottom: 20px;">Información General</h3>
                        <a href="/restaurantes" class="btn btn-primary" style="background-color: #28b463; color: white; padding: 10px 20px; border-radius: 25px; text-decoration: none; font-weight: bold; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: background-color 0.3s;">
                            Publicaciones generales sobre restaurantes de Providencia
                        </a>
                    </div>

            </div>
            
        <br><br>


<div class="container">
        <div class="card">
        <img src="{{ asset('img_servicios/ProviPollo.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Restaurante ProviPollo</h3>
                <p>En ProviPollo encontrarás los sabores más auténticos y jugosos del pollo asado a la brasa, preparado con una receta
                     secreta que ha pasado de generación en generación. Este acogedor restaurante es perfecto para disfrutar en familia
                      o con amigos, ofreciendo una experiencia gastronómica que resalta lo tradicional de la región.</p>
                   <a href="/vistasRestaurantes/vista1" class="reserve-button">Ver más</a>
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img_servicios/BrosterHouse2.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Restaurante Broster House</h3>
                <p>El Restaurante Broster House es el corazón gastronómico de Providencia, donde los sabores tradicionales de Nariño
                     se encuentran con técnicas familiares de cocina. Este restaurante es ideal para quienes buscan una experiencia
                      culinaria única, con platos cuidadosamente elaborados que resaltan los ingredientes locales y frescos.</p>
                     <a href="/vistasRestaurantes/vista2" class="reserve-button">Ver más</a>
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img_servicios/Marleny.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Restaurante Marleny</h3>
                <p>El Restaurante Marleny es un rincón lleno de tradición y calidez donde se sirve comida casera hecha con amor. 
                    Este restaurante es conocido por su hospitalidad y por ofrecer platos auténticos que resaltan los sabores de la región,
                     elaborados con ingredientes frescos y locales.</p>
                       <a href="/vistasRestaurantes/vista3" class="reserve-button">Ver más</a>
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img_servicios/RestauranteTrocha.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Melbis Restaurante</h3>
                <p>Melbis Restaurante, la pasión por la cocina se refleja en cada plato que se sirve. Este encantador restaurante
                     es conocido por su dedicación a ofrecer una experiencia culinaria auténtica,
                      donde los sabores de Nariño son los protagonistas. </p>
                       <a href="/vistasRestaurantes/vista4" class="reserve-button">Ver más</a>
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img_servicios/pollo.jpg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Restaurante el Buen Pollo</h3>
                <p>Broster King se ha convertido en el rey de las comidas rápidas en Providencia, ofreciendo  deliciosos platillos, 
                    con un enfoque especial en su famoso pollo broaster.
                     Este restaurante es el lugar perfecto para disfrutar de una comida rápida sin sacrificar el sabor.</p>
                    <a href="/vistasRestaurantes/vista5" class="reserve-button">Ver más</a>
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img_servicios/trad.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Restaurante la tradición del sabor</h3>
                <p>El Restaurante la tradición del sabor es un lugar acogedor que se destaca por su ambiente familiar y su deliciosa oferta
                     gastronómica. Con un enfoque en la cocina tradicional, este restaurante es ideal para disfrutar 
                     de una comida en grupo o disfrutar en familia.</p>
                      <a href="/vistasRestaurantes/vista6" class="reserve-button">Ver más</a>
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img_servicios/Mile.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Restaurante Meli</h3>
                <p>El Restaurante Meli es conocido por ofrecer una experiencia culinaria que combina la tradición Providenciana con toques gurmets.
                     Su menú está diseñado para sorprender y deleitar a los comensales, 
                     utilizando ingredientes frescos y de alta calidad.</p>
                        <a href="/vistasRestaurantes/vista7" class="reserve-button">Ver más</a>
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img_servicios/hornado.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Hornado Dona Socorro</h3>
                <p>Hornado Doña Socorro es un restaurante tradicionalmente conocido por la comunnidad Providenciana 
                    por su delicioso hornado, un plato tradicional Colombiano que consiste en cerdo asado,
                     crujiente por fuera y tierno por dentro. Este lugar es ideal para quienes buscan
                      disfrutar de la auténtica comida local en un ambiente acogedor.</p>
                          <a href="/vistasRestaurantes/vista8" class="reserve-button">Ver más</a>
            </div>
        </div>

       

     </div>   

@endsection