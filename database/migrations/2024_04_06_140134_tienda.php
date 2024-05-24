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
        Schema::create('tienda', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('videojuego_id');
            $table->foreign('videojuego_id')->references('id')->on('videojuegos')->onDelete('cascade');
            $table->string('nombre');
            $table->string('url_juego_tienda');
            $table->decimal('precio', 8, 2);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tienda');
    }
};
