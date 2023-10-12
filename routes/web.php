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

Route::view('/lugares', 'lugares')->name('DescubrirLugares');
