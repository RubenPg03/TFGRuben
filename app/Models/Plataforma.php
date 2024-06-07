<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plataforma extends Model
{
    use HasFactory;

    // Define el nombre de la tabla asociada al modelo
    protected $table = 'plataformas';

    // Especifica los atributos que se pueden asignar en masa
    protected $fillable = [
        'plataforma',
    ];

    // Define la relación muchos a muchos con el modelo Game
    public function juegos()
    {
        return $this->belongsToMany(Game::class);
    }
}
