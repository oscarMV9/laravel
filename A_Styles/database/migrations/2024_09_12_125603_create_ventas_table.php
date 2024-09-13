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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('documento_cliente');
            $table->string('nombre_cliente');
            $table->string('apellido_cliente');
            $table->foreignId('inventario_id')->constrained('inventario')->onDelete('cascade');
            $table->integer('cantidad_comprada')->nullable(); 
            $table->decimal('precio_unitario', 8, 2);
            $table->decimal('precio_total', 8, 2);
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
        Schema::dropIfExists('ventas');
    }
};
