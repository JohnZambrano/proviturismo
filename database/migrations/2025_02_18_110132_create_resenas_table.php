<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('resenas', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo', ['servicio', 'lugar', 'actividad']);
            $table->string('elemento_uid', 255);
            $table->text('origen');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            
            // Cambiar columna JSON a campos separados
            $table->integer('puntaje');
            $table->text('texto_comentario');
            $table->json('fotos')->nullable();
            
            // Índice fulltext tradicional
            $table->fullText('texto_comentario')->language('spanish');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resenas');
    }
};
