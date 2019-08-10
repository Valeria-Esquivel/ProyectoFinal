<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('id_manager');
            $table->integer('id_cliente');
            $table->string('titulo',20); 
            $table->date('fecha_incio');
            $table->date('fecha_vencimiento');
            $table->decimal('pago_total');
            $table->decimal('porcentaje_pagado');
            $table->boolean('estado')->default(1);
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
        Schema::dropIfExists('proyectos');
    }
}
