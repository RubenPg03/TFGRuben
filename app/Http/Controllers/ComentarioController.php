<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;
use App\Models\Game;

class ComentarioController extends Controller
{
    // Función para almacenar un nuevo comentario
    public function store(Request $request, Game $game)
    {
        // Validar que el comentario es requerido, es una cadena de texto y tiene un máximo de 255 caracteres
        $request->validate([
            'comentario' => 'required|string|max:255',
        ]);

        // Crear una nueva instancia de Comentario
        $comentario = new Comentario();
        // Asignar el ID del usuario autenticado al comentario
        $comentario->usuario_id = auth()->id();
        // Asignar el ID del juego al comentario
        $comentario->videojuego_id = $game->id;
        // Asignar el contenido del comentario al comentario
        $comentario->comentario = $request->comentario;
        // Guardar el comentario en la base de datos
        $comentario->save();

        // Redirigir a la ruta 'mostrar' con el ID del juego
        return redirect()->route('mostrar', ['id' => $game->id]);
    }

    // Función para mostrar la vista de crear un comentario para un juego
    public function crear(Game $game)
    {
        // Retorna la vista 'comentario' con la variable 'game' disponible en la vista
        return view('comentario', compact('game'));
    }
}

