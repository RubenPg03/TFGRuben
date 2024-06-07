<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JuegoPlataforma extends Model
{
    use HasFactory;

    // Define el nombre de la tabla asociada al modelo
    protected $table = 'juegoplataforma';

    // Especifica los atributos que se pueden asignar en masa
    protected $fillable = [
        'videojuego_id',
        'plataforma_id',
    ];
}

// Comentario para modificar archivo y suburlo
