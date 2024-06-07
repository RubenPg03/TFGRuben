<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    use HasFactory;

    // Define el nombre de la tabla asociada al modelo
    protected $table = 'tienda';

    // Especifica los atributos que se pueden asignar en masa
    protected $fillable = ['videojuego_id', 'nombre', 'url_juego_tienda', 'precio'];

    // Define la relación de pertenencia a un videojuego
    public function game()
    {
        return $this->belongsTo(Game::class, 'videojuego_id');
    }
}
