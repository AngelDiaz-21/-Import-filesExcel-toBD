<?php

use App\Models\Estado;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmisorController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\CodigoPController;
use App\Http\Controllers\UsoCFDIController;
use App\Http\Controllers\ColoniasController;
use App\Http\Controllers\LocalidadController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\FormasPagoController;
use App\Http\Controllers\MetodoPagoController;
use App\Http\Controllers\ClaveUnidadController;
use App\Http\Controllers\NuevoBoletinController;
use App\Http\Controllers\RegimenFiscalController;
use App\Http\Controllers\SeleccionarDatosController;
use App\Http\Controllers\Clave_ProductoServiciosController;


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

// Estados
Route::get('estados', [EstadoController::class, 'index'])->name('estados');
Route::get('estados/create', [EstadoController::class, 'create'])->name('estado-create');
Route::post('estado', [EstadoController::class, 'store'])->name('estado-store');
// Route::get('/estado', function () {
//     dd(Estado::get());
// });

Route::get('localidades', [LocalidadController::class, 'index'])->name('localidades');
Route::get('localidades/create', [LocalidadController::class, 'create'])->name('localidad-create');
Route::post('localidad', [LocalidadController::class, 'store'])->name('localidad-store');

//Municipios
Route::get('municipios', [MunicipioController::class, 'index'])->name('municipios');
Route::get('municipios/create', [MunicipioController::class, 'create'])->name('municipio-create');
Route::post('municipio', [MunicipioController::class, 'store'])->name('municipio-store');

// Colonias
Route::get('colonias', [ColoniasController::class, 'index'])->name('colonias');
Route::get('colonias/create', [ColoniasController::class, 'create'])->name('colonia-create');
Route::post('colonia', [ColoniasController::class, 'store'])->name('colonia-store');

// Codigos postales
Route::get('codigosPostales', [CodigoPController::class, 'index'])->name('codigosPostales');
Route::get('codigosPostales/create', [CodigoPController::class, 'create'])->name('codigoPostal-create');
Route::post('codigoPostal', [CodigoPController::class, 'store'])->name('codigoPostal-store');

// Métodos de pago
Route::get('metodosPago', [MetodoPagoController::class, 'index'])->name('metodosPago');
Route::get('metodosPago/create', [MetodoPagoController::class, 'create'])->name('metodoPago-create');
Route::post('metodoPago', [MetodoPagoController::class, 'store'])->name('metodoPago-store');

// Formas de pago
Route::get('formasPago', [FormasPagoController::class, 'index'])->name('formasPago');
Route::get('formasPago/create', [FormasPagoController::class, 'create'])->name('formaPago-create');
Route::post('formaPago', [FormasPagoController::class, 'store'])->name('formaPago-store');

// Regimén Fiscal
Route::get('regimenesFiscales', [RegimenFiscalController::class, 'index'])->name('regimenesFiscales');
Route::get('regimenesFiscales/create', [RegimenFiscalController::class, 'create'])->name('regimenFiscal-create');
Route::post('regimenFiscal', [RegimenFiscalController::class, 'store'])->name('regimenFiscal-store');

// Uso CFDI
Route::get('usoCFDI', [UsoCFDIController::class, 'index'])->name('usoCFDI');
Route::get('usoCFDI/create', [UsoCFDIController::class, 'create'])->name('usoCFDI-create');
Route::post('usoCFDI/store', [UsoCFDIController::class, 'store'])->name('usoCFDI-store');

// Claves de productos y servicios
Route::get('claves_productosServicios', [Clave_ProductoServiciosController::class, 'index'])->name('CPS');
Route::get('claves_productosServicios/create', [Clave_ProductoServiciosController::class, 'create'])->name('clave_productoServicio-create');
Route::post('clave_productoServicio', [Clave_ProductoServiciosController::class, 'store'])->name('clave_productoServicio-store');

// Claves de unidad
Route::get('clavesUnidad', [ClaveUnidadController::class, 'index'])->name('clavesUnidad');
Route::get('clavesUnidad/create', [ClaveUnidadController::class, 'create'])->name('claveUnidad-create');
Route::post('claveUnidad', [ClaveUnidadController::class, 'store'])->name('claveUnidad-store');

// Ejemplo de eventos y listener
Route::get('/evento-listener', [NuevoBoletinController::class, 'index']);
Route::post('/subscribe', [NuevoBoletinController::class, 'subscribe']);





//Seleccionar todos los datos
// Route::resource('seleccionar-datos', SeleccionarDatosController::class);
Route::get('/seleccionar-datos', [App\Http\Controllers\SeleccionarDatosController::class, 'index']);

// Select fetch municipios
// Route::post('municipios', SeleccionarDatosController::class);
Route::post('/municipios', [App\Http\Controllers\SeleccionarDatosController::class, 'municipios']);

// Select fetch localidades
Route::post('/localidades', [App\Http\Controllers\SeleccionarDatosController::class, 'localidad']);

// Select fetch colonia
Route::post('/colonias', [App\Http\Controllers\SeleccionarDatosController::class, 'colonias']);



Route::middleware(['auth'])->group(function () {

    // Route::resource('/emisor', EmisorController::class);

    Route::get('/emisor', [EmisorController::class, 'index']);

    Route::get('/emisor/create', [EmisorController::class, 'create']);

    Route::post('/emisor', [EmisorController::class, 'store'])->name('emisor.store');

    Route::get('/emisor/{id_emisor}/edit', [EmisorController::class, 'edit'])->name('emisor.edit');

    Route::put('/emisor/{id_emisor}', [EmisorController::class, 'update'])->name('emisor.update');
    
    Route::delete('/emisor/{id_emisor}', [EmisorController::class, 'destroy'])->name('emisor.delete');

    // FETCH
    Route::post('/emisor/regimenFiscales', [App\Http\Controllers\EmisorController::class, 'regimenFiscales']);

    Route::post('/emisor/{id_emisor}/regimenFiscales', [App\Http\Controllers\EmisorController::class, 'regimenFiscales']);
});