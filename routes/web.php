<?php

use Illuminate\Support\Facades\View;
use App\Http\Controllers\AboutController;

use App\Http\Controllers\ServicioHotelController;
use App\Http\Controllers\ServicioRestauranteController;
use App\Http\Controllers\ServicioTransporteController;

use App\Http\Controllers\HotelController;
use App\Http\Controllers\RestauranteController;
use App\Http\Controllers\TransporteController;

use App\Http\Controllers\VistaServicioController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;

use App\Http\Controllers\LugarTuristicoController;
use App\Http\Controllers\ActividadCulturalController;
use App\Http\Controllers\ResenasController;
use App\Http\Controllers\NoticiasController;



use App\Http\Controllers\ContactFormController;

 
use Illuminate\Support\Facades\Route;


/* Ruta para la vista principal welcome */

Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




/* Rutas para ServicioHotelController y sus vistas */

Route::delete('/hoteles/{hotel}', [ServicioHotelController::class, 'destroy'])->name('hoteles.destroy');

/* Rutas para ServicioRestauranteController y sus vistas */

Route::delete('/restaurantes/{restaurante}', [ServicioRestauranteController::class, 'destroy'])->name('restaurantes.destroy');

/* Rutas para ServicioTransporteController y sus vistas */
Route::delete('/transportes/{transporte}', [ServicioTransporteController::class, 'destroy'])->name('transportes.destroy');



/* Rutas generales de hotel,restaurante, transporte, about, lugares turisticos, actividades culturales y sus vistas */

Route::get('/about/index', [AboutController::class, 'index'])->name('about.index');
Route::get('/about/planea', [AboutController::class, 'planea'])->name('about.planea');
Route::get('/about/municipio', [AboutController::class, 'municipio'])->name('about.municipio');
Route::get('/servicios/servicios', [VistaServicioController::class, 'servicios'])->name('servicios.servicios');
Route::get('/servicios/hoteles', [HotelController::class, 'hoteles'])->name('servicios.hoteles');
Route::get('/servicios/restaurantes', [RestauranteController::class, 'restaurantes'])->name('servicios.restaurantes');
Route::get('/servicios/transporte', [TransporteController::class, 'transporte'])->name('servicios.transporte');
Route::get('/lugar_turistico/index',[LugarTuristicoController::class, 'index'])->name('lugar_turistico.index');
Route::get('/evento_cultural/index',[ActividadCulturalController::class, 'index'])->name('/evento_cultural/index');

Route::resource('resenas/index', ResenasController::class)->only(['index', 'show']); // Only index and show
Route::resource('noticias/index', NoticiasController::class)->only(['index', 'show']);// Only index and show


/* Rutas para mostrar vistas de transporte*/
Route::get('/vistasTransporte/vista1', [TransporteController::class, 'vista1'])->name('vistasTransporte.vista1');
Route::get('/vistasTransporte/vista2', [TransporteController::class, 'vista2'])->name('vistasTransporte.vista2');
Route::get('/vistasTransporte/vista3', [TransporteController::class, 'vista3'])->name('vistasTransporte.vista3');

/* Rutas para mostrar vistas de hoteles*/
Route::get('/vistasHoteles/vista1', [HotelController::class, 'vista1'])->name('vistasHoteles.vista1');
Route::get('/vistasHoteles/vista2', [HotelController::class, 'vista2'])->name('vistasHoteles.vista2');
Route::get('/vistasHoteles/vista3', [HotelController::class, 'vista3'])->name('vistasHoteles.vista3');
Route::get('/vistasHoteles/vista4', [HotelController::class, 'vista4'])->name('vistasHoteles.vista4');
Route::get('/vistasHoteles/vista5', [HotelController::class, 'vista5'])->name('vistasHoteles.vista5');

/* Rutas para mostrar vistas de restaurantes*/
Route::get('/vistasRestaurantes/vista1', [RestauranteController::class, 'vista1'])->name('vistasRestaurantes.vista1');
Route::get('/vistasRestaurantes/vista2', [RestauranteController::class, 'vista2'])->name('vistasRestaurantes.vista2');
Route::get('/vistasRestaurantes/vista3', [RestauranteController::class, 'vista3'])->name('vistasRestaurantes.vista3');
Route::get('/vistasRestaurantes/vista4', [RestauranteController::class, 'vista4'])->name('vistasRestaurantes.vista4');
Route::get('/vistasRestaurantes/vista5', [RestauranteController::class, 'vista5'])->name('vistasRestaurantes.vista5');
Route::get('/vistasRestaurantes/vista6', [RestauranteController::class, 'vista6'])->name('vistasRestaurantes.vista6');
Route::get('/vistasRestaurantes/vista7', [RestauranteController::class, 'vista7'])->name('vistasRestaurantes.vista7');
Route::get('/vistasRestaurantes/vista8', [RestauranteController::class, 'vista8'])->name('vistasRestaurantes.vista8');
Route::get('/vistasRestaurantes/vista9', [RestauranteController::class, 'vista9'])->name('vistasRestaurantes.vista9');


/* Rutas para mostrar vistas de actividades culturales*/
Route::get('/evento_cultural/vista1', [ActividadCulturalController::class, 'vista1'])->name('evento_cultural.vista1');
Route::get('/evento_cultural/vista2', [ActividadCulturalController::class, 'vista2'])->name('evento_cultural.vista2');
Route::get('/evento_cultural/vista3', [ActividadCulturalController::class, 'vista3'])->name('evento_cultural.vista3');
Route::get('/evento_cultural/vista4', [ActividadCulturalController::class, 'vista4'])->name('evento_cultural.vista4');
Route::get('/evento_cultural/vista5', [ActividadCulturalController::class, 'vista5'])->name('evento_cultural.vista5');
Route::get('/evento_cultural/vista6', [ActividadCulturalController::class, 'vista6'])->name('evento_cultural.vista6');
Route::get('/evento_cultural/vista7', [ActividadCulturalController::class, 'vista7'])->name('evento_cultural.vista7');
Route::get('/evento_cultural/vista8', [ActividadCulturalController::class, 'vista8'])->name('evento_cultural.vista8');
Route::get('/evento_cultural/vista9', [ActividadCulturalController::class, 'vista9'])->name('evento_cultural.vista9');
Route::get('/evento_cultural/vista10', [ActividadCulturalController::class, 'vista10'])->name('evento_cultural.vista10');
Route::get('/evento_cultural/vista11', [ActividadCulturalController::class, 'vista11'])->name('evento_cultural.vista11');


/* Rutas para mostrar vistas de lugares turisticos*/
Route::get('lugar_turistico/vista1', [LugarTuristicoController::class, 'vista1'])->name('lugar_turistico.vista1');
Route::get('lugar_turistico/vista2', [LugarTuristicoController::class, 'vista2'])->name('lugar_turistico.vista2');
Route::get('lugar_turistico/vista3', [LugarTuristicoController::class, 'vista3'])->name('lugar_turistico.vista3');
Route::get('lugar_turistico/vista4', [LugarTuristicoController::class, 'vista4'])->name('lugar_turistico.vista4');
Route::get('lugar_turistico/vista5', [LugarTuristicoController::class, 'vista5'])->name('lugar_turistico.vista5');
Route::get('lugar_turistico/vista6', [LugarTuristicoController::class, 'vista6'])->name('lugar_turistico.vista6');
Route::get('lugar_turistico/vista7', [LugarTuristicoController::class, 'vista7'])->name('lugar_turistico.vista7');
Route::get('lugar_turistico/vista8', [LugarTuristicoController::class, 'vista8'])->name('lugar_turistico.vista8');
Route::get('lugar_turistico/vista9', [LugarTuristicoController::class, 'vista9'])->name('lugar_turistico.vista9');
Route::get('lugar_turistico/vista10', [LugarTuristicoController::class, 'vista10'])->name('lugar_turistico.vista10');
Route::get('lugar_turistico/vista11', [LugarTuristicoController::class, 'vista11'])->name('lugar_turistico.vista11');
Route::get('lugar_turistico/vista12', [LugarTuristicoController::class, 'vista12'])->name('lugar_turistico.vista12');
Route::get('lugar_turistico/vista13', [LugarTuristicoController::class, 'vista13'])->name('lugar_turistico.vista13');
Route::get('lugar_turistico/vista14', [LugarTuristicoController::class, 'vista14'])->name('lugar_turistico.vista14');
Route::get('lugar_turistico/vista15', [LugarTuristicoController::class, 'vista15'])->name('lugar_turistico.vista15');

/* Rutas para gestion de mi perfil*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('hoteles', ServicioHotelController::class)->parameters([
    'hoteles' => 'hotel' // Singular correcto
]);

//Rutas para el formulario de about

Route::get('/about/index', [ContactFormController::class, 'showForm'])->name('contacto.formulario'); // Ruta para mostrar el formulario
Route::post('/about/index', [ContactFormController::class, 'submitForm'])->name('contacto.enviar'); // Ruta para recibir los datos del formulario


//Rutas generales de los controladores solo autenticado

Route::group(['middleware' =>['auth']], function(){
    Route::resource('roles',RolController::class);
    Route::resource('usuarios',UsuarioController::class);
    Route::resource('hoteles',ServicioHotelController::class); 
    Route::resource('restaurantes',ServicioRestauranteController::class);
    Route::resource('transportes',ServicioTransporteController::class);
    Route::resource('resenas',ResenasController::class);
    Route::resource('noticias',NoticiasController::class);
});

require __DIR__.'/auth.php';
