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
        Schema::create('juegoplataforma', function (Blueprint $table) {
            $table->unsignedBigInteger('videojuego_id');
            $table->foreign('videojuego_id')->references('id')->on('videojuegos')->onDelete('cascade');
            $table->unsignedBigInteger('plataforma_id');
            $table->foreign('plataforma_id')->references('id')->on('plataformas')->onDelete('cascade');
            $table->primary(['videojuego_id', 'plataforma_id']);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juegoplataforma');
    }
};
