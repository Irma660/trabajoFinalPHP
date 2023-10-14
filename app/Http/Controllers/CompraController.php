<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;
use Illuminate\Support\Facades\Log;

class CompraController extends Controller
{
    public function store(Request $request)
    {
        $rules = [
            'nombre' => 'required|string|max:255',
            'dni' => 'required|numeric|digits:8',
            'telefono' => 'required|numeric|digits:9',
            'direccion' => 'required|string|max:255',
            'lugar' => 'required|string|max:255',
            'numero_de_paquete' => 'required|integer|min:1',
            'fecha' => 'required|date',
            'numero_de_personas' => 'required|integer|min:1',
            'precio' => 'required|numeric|min:0',
        ];
    
        // Valida los datos del formulario
        $request->validate($rules);
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

        Log::info('Nueva compra registrada: ID ' . $compra->id);
        return redirect('/comprar')->with('success', 'El registro se realizó correctamente.');
    }
    public function showForm()
    {
        return view('compras');
    }
}