<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;

Route::get('/reservas', [reservaController::class, 'create'])->name('reservas.create');
Route::post('/reservas', [reservaController::class, 'store'])->name('reservas.store');

//Route::get('/ver-lugares', 'lugaresController@verLugares')->name('ver-lugares');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/access', function () {
    return view('access');
})->name('access') ;

Route::get('/reservas', function () {
    return view('reservas');
});

Route::view('/huanuco', 'huanuco')->name('infoHuanuco');
Route::view('/tingo', 'tingo')->name('infoTingo');
Route::view('/dosdemayo', 'dosdemayo')->name('infoDosm');
Route::view('/lauricocha', 'lauricocha')->name('infolauricocha');
Route::view('/reservas', 'reservas')->name('RealizarReserva');