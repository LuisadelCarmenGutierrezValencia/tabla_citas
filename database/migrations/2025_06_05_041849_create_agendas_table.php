<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
             $table->string('nombre_cliente');           // Nombre del cliente
            $table->string('telefono')->nullable();     // Teléfono (opcional)
            $table->string('correo')->nullable();       // Correo (opcional)
            $table->date('fecha');                      // Fecha de la cita
            $table->time('hora');                       // Hora de la cita
            $table->text('descripcion')->nullable();    // Descripción u observaciones
            $table->boolean('confirmada')->default(false); // Si la cita está confirmada
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendas');
    }
};
