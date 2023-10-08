<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lugaresController extends Controller
{
    public function verLugares()
    {
        // Coloca aquí la lógica para tu nueva página
        return view('lugares.ver-lugares'); // Esto carga la vista correspondiente
    }
}
