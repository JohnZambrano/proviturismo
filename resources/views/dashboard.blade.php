@extends('adminlte::page')

@section('title', 'Dashboard ProviTurismo')

@section('content_header')
  
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fas fa-tachometer-alt"></i> ProviTurismo
                        <link rel="icon" type="image/png" href="{{ asset('img/log.png') }}"> 
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                        <li class="breadcrumb-item active"><a href="/dashboard">Panel</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
    <!-- Info Boxes -->
     
    

    <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">                          
                                <div class="row">
                                    <div class="col-md-4 col-xl-4">
                                    
                                    <div class="card bg-c-blue order-card">
                                            <div class="card-block">
                                            <h5>Usuarios</h5>                                               
                                                @php
                                                 use App\Models\User;
                                                $cant_usuarios = User::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{$cant_usuarios}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/usuarios" class="text-black">Ver más</a></p>
                                            </div>                                            
                                        </div>                                    
                                    </div>
                                    
                                    <div class="col-md-4 col-xl-4">
                                        <div class="card bg-c-green order-card">
                                            <div class="card-block">
                                            <h5>Roles</h5>                                               
                                                @php
                                                use Spatie\Permission\Models\Role;
                                                 $cant_roles = Role::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-user-shield"></i><span>{{$cant_roles}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/roles" class="text-black">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>  

                                    
                                    <div class="col-md-4 col-xl-4">
                                        <div class="card bg-c-green order-card">
                                            <div class="card-block">
                                            <h5>Reseñas</h5>                                               
                                                @php
                                                use App\Models\Resena;
                                                 $cant_reseñas = Resena::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-star"></i><span>{{$cant_reseñas}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/resenas" class="text-black">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="col-md-4 col-xl-4">
                                        <div class="card bg-c-green order-card">
                                            <div class="card-block">
                                            <h5>Noticias</h5>                                               
                                                @php
                                                use App\Models\Noticias;
                                                 $cant_noticias = Noticias::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fas fa-newspaper"></i><span>{{$cant_noticias}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/noticias" class="text-black">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div> 


                                    <div class="col-md-4 col-xl-4">
                                        <div class="card bg-c-green order-card">
                                            <div class="card-block">
                                            <h5>Publicaciones de Hoteles</h5>                                               
                                                @php
                                                use App\Models\Hotel;
                                                 $cant_hoteles = Hotel::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-hotel"></i><span>{{$cant_hoteles}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/hoteles" class="text-black">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="col-md-4 col-xl-4">
                                        <div class="card bg-c-green order-card">
                                            <div class="card-block">
                                            <h5>Publicaciones de Restaurantes</h5>                                               
                                                @php
                                                use App\Models\Restaurante;
                                                 $cant_restaurantes = Restaurante::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fas fa-utensils"></i><span>{{$cant_restaurantes}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/restaurantes" class="text-black">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="col-md-4 col-xl-4">
                                        <div class="card bg-c-green order-card">
                                            <div class="card-block">
                                            <h5>Publicaciones de Transporte</h5>                                               
                                                @php
                                                use App\Models\Transporte;
                                                 $cant_transporte = Transporte::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-bus"></i><span>{{$cant_transporte}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/transportes" class="text-black">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div> 
                                    
                                   
                                </div>                        
                        </div>
                    </div>
                </div>
            </div>

    <!-- Charts Section -->
    <div class="row">
        <!-- World Map -->
        <div class="col-md-8">
            <div class="card card-primary card-outline elevation-2">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-globe"></i> Distribución de Visitas de la web</h3>
                </div>
                <div class="card-body">
                    <canvas id="myChart" style="height: 350px; width: 100%;"></canvas>
                </div>
            </div>
        </div>

        <!-- Donut Chart -->
        <div class="col-md-4">
            <div class="card card-info card-outline elevation-2">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-chart-pie"></i> Distribución de Servicios</h3>
                </div>
                <div class="card-body">
                    <canvas id="donutChart" style="height: 350px;"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Line Chart & Calendar -->
    <div class="row">
        <div class="col-md-8">
        <div class="card card-success card-outline elevation-2">
            <div class="card-header">
                <h3 class="card-title"><i class="fas fa-chart-bar"></i> Estadísticas Mensuales</h3>
            </div>
            <div class="card-body">
                <canvas id="barChart" style="height: 350px; width: 100%;"></canvas>
            </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card card-primary card-outline elevation-2">
            <div class="card-header">
                <h3 class="card-title"><i class="fas fa-calendar"></i> Calendario</h3>
            </div>
            <div class="card-body">
                <div id="calendar"></div>
            </div>
        </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://unpkg.com/jvectormap@2.0.4/jquery-jvectormap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css">
    <link rel="stylesheet" href="{{ asset('css/graficos.css') }}">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/jvectormap@2.0.4/jquery-jvectormap.min.js"></script>
    <script src="https://unpkg.com/jvectormap@2.0.4/jquery-jvectormap-world-mill.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    
    <!-- Agrega este script para incluir Chart.js -->
    <script src="{{ asset('js/graficos.js') }}"></script>

@stop

@section('footer')
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Versión</b> 1.0.0
            <span class="px-2">|</span>
            <i class="fas fa-clock"></i> <span id="current-time"></span>
        </div>
        <strong>
            <i class="fas fa-copyright"></i> 2025 
            <a href="#" class="text-info">ProviTurismo</a>
        </strong>
        <span class="px-2">|</span>
        <i class="fas fa-code"></i> con 
        <i class="fas fa-heart text-danger"></i> por el equipo de desarrollo.
        <br><br>
        <strong>Copyright</strong><p class="mb-0">&copy; {{ date('Y') }} ProviTurismo. Todos los derechos reservados.</p>
    </footer>
@stop
