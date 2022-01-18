<?php

use App\Models\registroempresas;
use App\Http\Controllers\RegistroempresasController;

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
    return view('welcome2');
});

 
Route::get('/enviar-solicitud', [App\Http\Controllers\RegistroempresasController::class, 'index'])->name('enviar-solicitud');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
<<<<<<< HEAD
//el nombre que es? xd
//Route::get('/home/empresas', [App\Http\Controllers\RegistroempresasController::class, 'index'])->name('registroempresa');

Route::resource('registroempresa', RegistroempresasController::class);
=======

>>>>>>> f37d71f0c0669b5eae9b17bfe108b88c14fc21fb
