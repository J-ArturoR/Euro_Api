<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

use App\Http\Controllers\CatalogoController as Catalogo; 
use App\Http\Controllers\CategoriaController as Categoria; 
use App\Http\Controllers\CircuitoController as Circuito; 
use App\Http\Controllers\ContactoController as Contacto;
use App\Http\Controllers\DestinoController as Destino; 
use App\Http\Controllers\FlyerController as Flyer; 
use App\Http\Controllers\IncluyeController as Incluye;
use App\Http\Controllers\ItinerarioCirController as ItinerarioCir;
use App\Http\Controllers\ItinerarioDestController as ItinerarioDest; 
use App\Http\Controllers\LogoController as Logo;
use App\Http\Controllers\PaqueteController as Paquete; 
use App\Http\Controllers\ProtocoloController as Protocolo; 
use App\Http\Controllers\SliderController as Slider;
use App\Http\Controllers\TxtSliderController as TxtSlider;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(Catalogo::class)->group(function(){
    Route::get('/catalogo','index');
    Route::post('/catalogo/store','store');
    Route::get('/catalogo/{id}','show');
    Route::put('/catalogo/update/{id}','update');
    Route::delete('/catalogo/destroy/{id}','destroy');
});

Route::controller(Categoria::class)->group(function (){
    Route::get('/categoria','index');
    Route::post('/categoria/store','store');
    Route::get('/categoria/{id}','show');
    Route::put('/categoria/update/{id}','updtae');
    Route::delete('/categoria/destroy/{id}','destroy');
});

Route::controller(Circuito::class)->group(function (){
    Route::get('/circuito','index');
    Route::post('/circuito/store','store');
    Route::get('/circuito/{id}','show');
    Route::put('/circuito/update/{id}','update');
    Route::delete('/circuito/destroy','destroy');
});

Route::controller(Contacto::class)->group(function (){
    Route::get('/contacto','index');
    Route::post('/contacto/store','store');
    Route::get('/contacto/{id}','show');
    Route::put('/contacto/update/{id}','update');
    Route::delete('/contacto/destroy/{id}','destroy');
});

Route::controller(Destino::class)->group(function (){
    Route::get('/destino','index');
    Route::post('/destino/store','store');
    Route::get('/destino/{id}','show');
    Route::put('/destino/update/{id}','update');
    Route::delete('/destino/destroy/{id}','destroy');
});

Route::controller(Flyer::class)->group(function (){
    Route::get('/flyer','index');
    Route::post('/flyer/store','store');
    Route::get('/flyer/{id}','show');
    Route::put('/flyer/update/{id}','update');
    Route::delete('/flyer/destroy/{id}','destroy');
});

Route::controller(Incluye::class)->group(function (){
    Route::get('/incluye','index');
    Route::post('/incluye/store','store');
    Route::get('/incluye/{id}','show');
    Route::put('/incluye/update/{id}','update');
    Route::delete('/incluye/destroy/{id}','destroy');
});

Route::controller(itinerarioCir::class)->group(function (){
    Route::get('/itncir','index');
    Route::post('/itncir/store','store');
    Route::get('/itncir/{id}','show');
    Route::put('/itncir/update/{id}','update');
    Route::delete('/itncir/destroy/{id}','destroy');
});

Route::controller(ItinerarioDest::class)->group(function (){
    Route::get('/itndest','index');
    Route::post('/itndest/store','store');
    Route::get('/itndest/{id}','show');
    Route::put('/itndest/update/{id}','update');
    Route::delete('/itndest/destroy/{id}','destroy');
});

Route::controller(Logo::class)->group( function (){
    Route::get('/logo','index');
    Route::post('/logo/store','store');
    Route::get('/logo/{id}','show');
    Route::put('/logo/update/{id}','update');
    Route::delete('/logo/destroy/{id}','destroy');
});

Route::controller(Paquete::class)->group( function (){
    Route::get('/paquete','index');
    Route::post('/paquete/store','store');
    Route::get('/paquete/{id}','show');
    Route::put('/paquete/update/{id}','update');
    Route::delete('/paquete/destroy/{id}','destroy');
});

Route::controller(Protocolo::class)->group( function (){
    Route::get('/protocolo','index');
    Route::post('/protocolo/store','store');
    Route::get('/protocolo/{id}','show');
    Route::put('/protocolo/update/{id}','update');
    Route::delete('/protocolo/destroy/{id}','destroy');
});

Route::controller(Slider::class)->group( function (){
    Route::get('/slider','index');
    Route::post('/slider/store','store');
    Route::get('/slider/{id}','show');
    Route::put('/slider/update/{id}','update');
    Route::delete('/slider/destroy/{id}','destroy');
});

Route::controller(TextSlider::class)->group(function (){
    Route::get('/txtslider','index');
    Route::post('/txtslider/store','store');
    Route::get('/txtslider/{id}','show');
    Route::put('/txtslider/update/{id}','update');
    Route::delete('/txtslider/destroy/{id}','destroy');
});



