@extends('layouts.myappCF')

@section('content')
        <br><br>
           <!-- Contenedor principal con un nombre único -->
            <div id="unique-container" style="background-color: #f9f9f9; padding: 30px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 800px; margin: auto; opacity: 0; animation: unique-fade-in 0.5s ease-in-out forwards;">

                    <!-- Card para el título con un nombre único -->
                    <div id="unique-title-card" style="background-color: #1a1a2e; border-radius: 15px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); text-align: center; margin-bottom: 20px; opacity: 0; animation: unique-fade-in 0.5s ease-in-out 0.2s forwards;">
                        <h2 style="color: #ffffff; font-size: 30px; font-weight: bold; margin: 0;">Conoce los hoteles de Providencia-Nariño</h2>
                    </div>

                    <!-- Card para la información general con un nombre único -->
                    <div id="unique-info-card" style="background-color: #1a1a2e; border-radius: 15px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); text-align: center; opacity: 0; animation: unique-fade-in 0.5s ease-in-out 0.4s forwards;">
                        <h3 style="color: #ffffff; font-family: Arial, sans-serif; margin-bottom: 20px;">Información General</h3>
                        <a href="/hoteles" class="btn btn-primary" style="background-color: #28b463; color: white; padding: 10px 20px; border-radius: 25px; text-decoration: none; font-weight: bold; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: background-color 0.3s;">
                            Publicaciones generales sobre hoteles de Providencia
                        </a>
                    </div>

            </div>
            
        <br><br>

        <div class="container">
            
                <div class="card">
                <img src="{{ asset('img_servicios/HotelRey.jpeg') }}" class="d-block w-100" alt="...">
                    <div class="card-content">
                        <h3>Hotel el Rey</h3>
                        <p>El Hotel El Rey es un alojamiento acogedor y cómodo ubicado en el municipio de Providencia,
                             en el departamento de Nariño, Colombia. Este pequeño municipio, rodeado de paisajes andinos
                             y una atmósfera tranquila, ofrece a los visitantes una experiencia
                              auténtica y relajante con habitaciones comodas y cerca del parque principal.</p>
                        <a href="/vistasHoteles/vista1" class="reserve-button">Ver más</a>  
                    </div>
                </div>

                <div class="card">
                <img src="{{ asset('img_servicios/20Julio.jpeg') }}" class="d-block w-100" alt="...">
                    <div class="card-content">
                        <h3>Hotel 20 de Julio</h3>
                        <p>El Hotel 20 de Julio es un encantador establecimiento situado en una de las salidas de Providencia, 
                            Nariño, Colombia. Con un ambiente acogedor y un enfoque en la atención al cliente, este hotel 
                            es perfecto para aquellos que buscan una experiencia auténtica y con mucha privacidad
                             en esta hermosa región y a la vez buen precio.</p>
                            <a href="/vistasHoteles/vista2" class="reserve-button">Ver más</a> 
                    </div>
                </div>

                <div class="card">
                <img src="{{ asset('img_servicios/HotelCami2.jpeg') }}" class="d-block w-100" alt="...">
                    <div class="card-content">
                        <h3>Hotel Cami</h3>
                        <p>El Hotel Cami es un acogedor y encantador establecimiento ubicado en el municipio de Providencia,
                             Nariño, Colombia.Este hotel es ideal para aquellos que buscan una experiencia tranquila y 
                             auténtica, ofrece comodidad, buena atención y precios accecibles.</p>
                            <a href="/vistasHoteles/vista3" class="reserve-button">Ver más</a> 
                    </div>
                </div>

                <div class="card">
                <img src="{{ asset('img_servicios/RedBetania.jpeg') }}" class="d-block w-100" alt="...">
                    <div class="card-content">
                        <h3>Residencia Barrio Betania</h3>
                        <p>La Residencia Barrio Betania es un alojamiento sencillo y acogedor ubicado en el municipio de
                             Providencia, Nariño, Colombia. Este lugar es ideal para los viajeros que buscan una estadía
                              tranquila y económica, con un ambiente familiar y cercano a la comunidad local. </p>
                            <a href="/vistasHoteles/vista4" class="reserve-button">Ver más</a> 
                    </div>
                </div>

                <div class="card">
                <img src="{{ asset('img_servicios/CasaFlores.jpeg') }}" class="d-block w-100" alt="...">
                    <div class="card-content">
                        <h3>Residencia casa de las flores</h3>
                        <p>La Residencia Casa de las Flores es un encantador y acogedor alojamiento situado en el municipio 
                            de Providencia, Nariño, Colombia. Este lugar es ideal para aquellos que buscan disfrutar
                             de una estancia tranquila rodeados de un ambiente natural y florido. </p>
                            <a href="/vistasHoteles/vista5" class="reserve-button">Ver más</a> 
                            
                    </div>
                </div>

        </div>    

            
           
@endsection


    

