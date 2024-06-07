<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    use HasFactory;

    // Define el nombre de la tabla asociada al modelo
    protected $table = 'calificaciones';

    // Especifica los atributos que se pueden asignar en masa
    protected $fillable = [
        'usuario_id',
        'videojuego_id',
        'calificacion',
    ];

    // Define la relación de pertenencia a un usuario
    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    // Define la relación de pertenencia a un videojuego
    public function videojuego()
    {
        return $this->belongsTo(Game::class, 'videojuego_id');
    }
}
