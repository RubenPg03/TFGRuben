<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;
use App\Models\Game;

class ComentarioController extends Controller
{
    public function store(Request $request, Game $game)
    {
        $request->validate([
            'comentario' => 'required|string|max:255',
        ]);

        $comentario = new Comentario();
        $comentario->usuario_id = auth()->id();
        $comentario->videojuego_id = $game->id;
        $comentario->comentario = $request->comentario;
        $comentario->save();

        return redirect()->route('mostrar', ['id' => $game->id]);
    }

    public function crear(Game $game)
    {
        return view('comentario', compact('game'));
    }
}
