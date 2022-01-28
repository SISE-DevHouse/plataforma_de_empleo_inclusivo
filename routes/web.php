<?php


use App\Http\Controllers\RegistroempresasController;
use App\Http\Controllers\EditarperfilController;
use App\Http\Controllers\EmpresaController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\UsersController;

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
Route::get('enviar-solicitud2', [App\Http\Controllers\RegistroempresasController::class, 'solicitud'])->name('enviar-solicitud2');

Route::get('/enviar-solicitud', [App\Http\Controllers\RegistroempresasController::class, 'index'])->name('enviar-solicitud');
Auth::routes();



/*para vincular esta ruta con el controlador y su metodo ofuncion, y el middleware para ver si es postulante*/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth.administrador');

/*para vincular todas las rutas y todos lo metodos del controlador, y el middleware para ver si es empresa*/

Route::resource('/home/empresas', RegistroempresasController::class);


Route::resource('distritos',\App\Http\Controllers\DistritoController::class)->middleware('auth');
Route::resource('empresas',\App\Http\Controllers\EmpresaController::class)->middleware('auth');
Route::resource('usuarios',\App\Http\Controllers\UserController::class)->middleware('auth');










Route::GET('EditarPerfil/{id}', 'App\Http\Controllers\EditarperfilController@edit');

Route::GET('vizualizar/{id}', 'App\Http\Controllers\EditarperfilController@edit2');

Route::PATCH('EditarPerfil/{id}', 'App\Http\Controllers\EditarperfilController@update');

Route::GET('descargarcv/{id}', 'App\Http\Controllers\EditarperfilController@mostrarcv');

