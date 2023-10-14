<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompraController;

Route::post('/comprar', 'CompraController@store')->name('comprar');


Route::get('/', function () {
    return view('welcome');
});


Route::view('/huanuco', 'huanuco')->name('infoHuanuco');
Route::view('/tingo', 'tingo')->name('infoTingo');
Route::view('/dosdemayo', 'dosdemayo')->name('infoDosm');
Route::view('/lauricocha', 'lauricocha')->name('infolauricocha');
Route::view('/reservas', 'reservas')->name('RealizarReserva');