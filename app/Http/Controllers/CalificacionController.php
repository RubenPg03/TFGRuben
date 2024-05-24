<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Calificacion;

class CalificacionController extends Controller
{
    public function guardar(Request $request, Game $game)
    {
        $request->validate([
            'calificacion' => 'required|numeric|min:1|max:10',
        ]);

        $userId = auth()->id();

        $calificacion = Calificacion::where('usuario_id', $userId)
            ->where('videojuego_id', $game->id)
            ->first();

        if ($calificacion) {
            $calificacion->calificacion = $request->calificacion;
            $calificacion->save();
        } else {
            $calificacion = new Calificacion();
            $calificacion->usuario_id = $userId;
            $calificacion->videojuego_id = $game->id;
            $calificacion->calificacion = $request->calificacion;
            $calificacion->save();
        }

        return redirect()->route('mostrar', $game->id);
    }

    public function crear(Game $game)
    {
        return view('calificacion', compact('game'));
    }

    public function calificacionMedia($gameId)
    {
        $calificaciones = Calificacion::where('videojuego_id', $gameId)->pluck('calificacion');
        $calificacionMedia = $calificaciones->avg();

        return $calificacionMedia;
    }
}
