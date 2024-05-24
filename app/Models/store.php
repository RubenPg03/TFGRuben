<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $table = 'tienda';

    protected $fillable = [
        'nombre',
        'url_juego_tienda',
        'precio',
    ];

    public function videojuego()
    {
        return $this->belongsTo(Game::class);
    }
}
