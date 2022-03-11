<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\StateController;
=======
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\CodigoPController;
use App\Http\Controllers\LocalidadController;
>>>>>>> 69ac9a3... feat: Importar localidades

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


<<<<<<< HEAD
Route::resource('states', StateController::class);
=======
// Estados
Route::resource('estado', EstadoController::class);

// Codigos postales
Route::resource('codigoPostal', CodigoPController::class);

// Localidades
Route::resource('localidad', LocalidadController::class);
>>>>>>> 69ac9a3... feat: Importar localidades
