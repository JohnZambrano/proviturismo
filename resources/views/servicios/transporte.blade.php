@extends('layouts.myappCF')

@section('content')
        <br><br>
           <!-- Contenedor principal con un nombre único -->
            <div id="unique-container" style="background-color: #f9f9f9; padding: 30px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 800px; margin: auto; opacity: 0; animation: unique-fade-in 0.5s ease-in-out forwards;">

                    <!-- Card para el título con un nombre único -->
                    <div id="unique-title-card" style="background-color: #1a1a2e; border-radius: 15px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); text-align: center; margin-bottom: 20px; opacity: 0; animation: unique-fade-in 0.5s ease-in-out 0.2s forwards;">
                        <h2 style="color: #ffffff; font-size: 30px; font-weight: bold; margin: 0;">Conoce las empresas de transporte de Providencia-Nariño</h2>
                    </div>

                    <!-- Card para la información general con un nombre único -->
                    <div id="unique-info-card" style="background-color: #1a1a2e; border-radius: 15px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); text-align: center; opacity: 0; animation: unique-fade-in 0.5s ease-in-out 0.4s forwards;">
                        <h3 style="color: #ffffff; font-family: Arial, sans-serif; margin-bottom: 20px;">Información General</h3>
                        <a href="/transportes" class="btn btn-primary" style="background-color: #28b463; color: white; padding: 10px 20px; border-radius: 25px; text-decoration: none; font-weight: bold; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: background-color 0.3s;">
                            Publicaciones generales sobre empresas de transporte de Providencia
                        </a>
                    </div>

            </div>
            
        <br><br>



<div class="container">
        <div class="card">
        <img src="{{ asset('img_servicios/TransIpiales.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>TransIpiales S.A</h3>
                <p>TransIpiales S.A. es una empresa de transporte terrestre dedicada a ofrecer servicios de movilidad 
                    de pasajeros y carga dentro de Colombia. Es una de las empresas líder de transporte terrestre automotor
                     en el Suroccidente de Colombia, con más de cincuenta años de experiencia en la prestación del
                      servicio de transporte de pasajeros, carga y encomiendas. Las Oficinas Principales se
                       encuentran en la ciudad de Pasto, desde donde se dirigen las operaciones al resto del país.</p>
                   <a href="{{ route('vistasTransporte.vista1') }}" class="reserve-button">Ver más</a>
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img_servicios/Pasto.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3> Expreso San Juan de Pasto S.A</h3>
                <p>Expreso San Juan de Pasto es una de las principales empresas de transporte porque ofrece 
                    un buen servicio de bus al cumplir con todas las normas de seguridad. Su puntualidad y otras 
                    comodidades durante el viaje han vuelto a Expreso San Juan de Pasto popular entre los pasajeros.
                     Expreso San Juan de Pasto también cubre distintas rutas conectando diferentes ciudades en el país.</p>
                     <a href="{{ route('vistasTransporte.vista2') }}" class="reserve-button">Ver más</a>
            </div>
        </div>

        <div class="card">
        <img src="{{ asset('img_servicios/TransProvi.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>TransProvidencia S.A</h3>
                <p>TransProvidencia S.A. es una empresa de transporte terrestre que opera en el municipio de Providencia,
                     ubicado en el departamento de Nariño, Colombia. Esta compañía es reconocida por ofrecer servicios de movilidad
                      esenciales para los habitantes de Providencia y las regiones aledañas, facilitando el transporte 
                      de pasajeros y encomiendas. Al encontrarse en una zona predominantemente rural, su labor es clave 
                      para la conectividad y el desarrollo económico de la región.</p>
                       <a href="{{ route('vistasTransporte.vista3') }}" class="reserve-button">Ver más</a>
            </div>
        </div>

</div>   

@endsection