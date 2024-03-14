<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolicitudController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/bienvenida', function () {
    return view('bienvenida');
});

Route::get('/vistaprincipal', function () {
    return view('vistaprincipal');
});







//->name('application');
Route:: get('phpmyinfo', function() {
    phpinfo();
    })->name('phpmyinfo');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/solicitudes', 'SolicitudController@index')->name('solicitudes.index');

Route::get('/solicitudes', [App\Http\Controllers\SolicitudController::class, 'index'])->name('solicitudes.index');


Route::get('/servicios/list', [App\Http\Controllers\ServicioController::class, 'index'])->name('servicios.index');


Auth::routes();
Route::put('/servicios/update/{id}', [App\Http\Controllers\ServicioController::class, 'update'])->name('servicios.update');

Auth::routes();
Route::get('/servicios/edit/{id}', [App\Http\Controllers\ServicioController::class, 'edit'])->name('servicios.edit');

Auth::routes();
Route::delete('/servicios/{servicio}', [App\Http\Controllers\ServicioController::class, 'destroy'])->name('servicios.destroy');

Auth::routes();
Route::get('/servicios/create', [App\Http\Controllers\ServicioController::class, 'create'])->name('servicios.create');

Auth::routes();
Route::post('/servicios/store', [App\Http\Controllers\ServicioController::class, 'store'])->name('servicios.store');

////////

Auth::routes();
Route::put('/solicitudes/update/{id}', [App\Http\Controllers\SolicitudController::class, 'update'])->name('solicitud.update');

Auth::routes();
Route::get('/solicitudes/edit/{id}', [App\Http\Controllers\SolicitudController::class, 'edit'])->name('solicitud.edit');

Auth::routes();
Route::get('/solicitudes/create', [App\Http\Controllers\SolicitudController::class, 'create'])->name('solicitud.create');

Auth::routes();
Route::post('/solicitudes/store', [App\Http\Controllers\SolicitudController::class, 'store'])->name('solicitud.store');

Auth::routes();
Route::delete('/solicitudes/{solicitud}', [App\Http\Controllers\SolicitudController::class, 'destroy'])->name('solicitud.destroy');


