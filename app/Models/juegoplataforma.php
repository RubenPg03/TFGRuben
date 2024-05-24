<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JuegoPlataforma extends Model
{
    use HasFactory;
    protected $table = 'juegoplataforma';

    protected $fillable = [
        'videojuego_id',
        'plataforma_id',
    ];
}
