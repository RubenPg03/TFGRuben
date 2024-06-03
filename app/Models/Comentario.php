<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    // Especifica los atributos que se pueden asignar en masa
    protected $fillable = ['videojuego_id', 'usuario_id', 'comentario'];

    // Define la relación de pertenencia a un videojuego
    public function game()
    {
        return $this->belongsTo(Game::class, 'videojuego_id');
    }

    // Define la relación de pertenencia a un usuario
    public function user()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
}
