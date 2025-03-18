@extends('layouts.myapp')

@section('content')

 <!-- Sección para revisar los servicios de Providencia-Nariño-->
 <br><br>
            <h2 style="text-align: center; font-size: 30px; font-weight: bold;">📢 Conoce nuestros servicios🛎️</h2>

            <br><br>

            <div class="activities-container">  

               <div class="activity-card">
                    <div class="icon-container">
                        <i class="fas fa-hotel"></i>
                    </div>
                    <h3 class="activity-title">Hoteles</h3>
                    <p class="activity-description">Los hoteles en Providencia, Nariño, ofrecen una experiencia acogedora y auténtica</p>
                    <a href="/servicios/hoteles" class="reserve-button">Ver más</a>
                </div>

                <div class="activity-card">
                    <div class="icon-container">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3 class="activity-title">Restaurantes</h3>
                    <p class="activity-description">Los restaurantes en Providencia, Nariño, ofrecen una deliciosa variedad de platos locales y tradicionales</p>
                    <a href="/servicios/restaurantes" class="reserve-button">Ver más</a>
                </div>

                <div class="activity-card">
                    <div class="icon-container">
                        <i class="fas fa-bus"></i>
                    </div>
                    <h3 class="activity-title">Transporte</h3>
                    <p class="activity-description">El transporte en Providencia, Nariño, es eficiente y accesible, con opciones que incluyen autobuses locales y servicios de camionetas</p>
                    <a href="/servicios/transporte" class="reserve-button">Ver más</a>
                </div>

            </div>

@endsection


    

