<?php

use App\Models\registroempresas;
use App\Http\Controllers\RegistroempresasController;
use App\Http\Controllers\EditarperfilController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/**/
Route::get('/enviar-solicitud', [App\Http\Controllers\RegistroempresasController::class, 'index'])->name('enviar-solicitud');
Auth::routes();

/*para vincular esta ruta con el controlador y su metodo ofuncion, y el middleware para ver si es postulante*/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth.postulante');

/*para vincular todas las rutas y todos lo metodos del controlador, y el middleware para ver si es empresa*/
Route::resource('/home/registroempresa', RegistroempresasController::class)->middleware('auth.registroempresa');





Route::GET('EditarPerfil/{id}', 'App\Http\Controllers\EditarperfilController@edit');

Route::PATCH('EditarPerfil/{id}', 'App\Http\Controllers\EditarperfilController@update');


Route::resource('registroempresa', RegistroempresasController::class);
