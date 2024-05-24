<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $fillable = ['videojuego_id', 'usuario_id', 'comentario'];

    public function game()
    {
        return $this->belongsTo(Game::class, 'videojuego_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
}

