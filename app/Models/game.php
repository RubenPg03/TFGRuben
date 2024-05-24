<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $table = 'videojuegos';

    protected $fillable = [
        'titulo',
        'descripcion',
        'genero',
        'fecha_lanzamiento',
        'imagen',
    ];

    public function juegoplataforma()
    {
        return $this->hasMany(JuegoPlataforma::class);
    }

    public function plataformas()
    {
        return $this->belongsToMany(Plataforma::class, 'juegoplataforma', 'videojuego_id', 'plataforma_id');
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'videojuego_id')->orderBy('created_at', 'desc');
    }

    public function tiendas()
    {
        return $this->hasMany(Tienda::class, 'videojuego_id');
    }
}
