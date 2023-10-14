<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $fillable = [

        'nombre',
        'dni',
        'telefono',
        'direccion',
        'lugar',
        'numero_de_paquete',
        'fecha',
        'numero_de_personas',
        'precio'
    ];

}