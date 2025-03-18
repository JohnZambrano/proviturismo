<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->enum('tipo', ['Restaurante', 'Hotel', 'Transporte']);
            $table->text('descripcion')->nullable();
            $table->foreignId('proveedor_id')->constrained('users')->onDelete('cascade');
            $table->string('imagen')->nullable();  // Nueva columna para la imagen
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('servicios');
    }
}

