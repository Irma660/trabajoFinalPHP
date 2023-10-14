<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;

class CompraController extends Controller
{
    public function store(Request $request)
    {
            $compra = new Compra();
            $compra->nombre = $request->nombre;
            $compra->dni = $request->dni;
            $compra->telefono = $request->telefono;
            $compra->direccion = $request->direccion;
            $compra->lugar = $request->lugar;
            $compra->numero_de_paquete = $request->numero_de_paquete;
            $compra->fecha = $request->fecha;
            $compra->numero_de_personas = $request->numero_de_personas;
            $compra->precio = $request->precio;
            $compra->save();
            return redirect('/comprar');
        }
}
