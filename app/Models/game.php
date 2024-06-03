<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    // Define el nombre de la tabla asociada al modelo
    protected $table = 'videojuegos';

    // Especifica los atributos que se pueden asignar en masa
    protected $fillable = [
        'titulo',
        'descripcion',
        'genero',
        'fecha_lanzamiento',
        'imagen',
    ];

    // Define la relación uno a muchos con el modelo JuegoPlataforma
    public function juegoplataforma()
    {
        return $this->hasMany(JuegoPlataforma::class);
    }

    // Define la relación muchos a muchos con el modelo Plataforma
    public function plataformas()
    {
        return $this->belongsToMany(Plataforma::class, 'juegoplataforma', 'videojuego_id', 'plataforma_id');
    }

    // Define la relación uno a muchos con el modelo Comentario, ordenando los comentarios por fecha de creación descendente
    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'videojuego_id')->orderBy('created_at', 'desc');
    }

    // Define la relación uno a muchos con el modelo Tienda
    public function tiendas()
    {
        return $this->hasMany(Tienda::class, 'videojuego_id');
    }
}
