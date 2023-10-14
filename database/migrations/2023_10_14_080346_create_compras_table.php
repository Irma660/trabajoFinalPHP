<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('dni');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('lugar');
            $table->integer('numero_de_paquete');
            $table->date('fecha');
            $table->integer('numero_de_personas');
            $table->decimal('precio', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};