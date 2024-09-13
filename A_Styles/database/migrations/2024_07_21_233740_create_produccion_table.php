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
        Schema::create('produccions', function (Blueprint $table) {
            $table->id('id_producto');
            $table->string('nombre_producto');
            $table->string('talla');
            $table->string('color');
            $table->integer('cantidad');
            $table->date('fecha_produccion');
            $table->date('fecha_fin_produccion')->nullable();
            $table->string('estado');
            $table->unsignedBigInteger('id_encargado');
            $table->string('nombre_encargado');
            $table->string('apellido_encargado');
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
        Schema::dropIfExists('produccion');
    }
};
