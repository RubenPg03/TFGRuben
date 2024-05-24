<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    use HasFactory;

    protected $table = 'tienda';

    protected $fillable = ['videojuego_id', 'nombre', 'url_juego_tienda', 'precio'];

    public function game()
    {
        return $this->belongsTo(Game::class, 'videojuego_id');
    }
}
