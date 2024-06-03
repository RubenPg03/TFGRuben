<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Calificacion;

class CalificacionController extends Controller
{
    // Función para guardar la calificación de un juego
    public function guardar(Request $request, Game $game)
    {
        // Validar que la calificación es un número requerido entre 1 y 10
        $request->validate([
            'calificacion' => 'required|numeric|min:1|max:10',
        ]);

        // Obtener el ID del usuario autenticado
        $userId = auth()->id();

        // Buscar si ya existe una calificación para el usuario y el juego especificado
        $calificacion = Calificacion::where('usuario_id', $userId)
            ->where('videojuego_id', $game->id)
            ->first();

        if ($calificacion) {
            // Si existe, actualizar la calificación existente
            $calificacion->calificacion = $request->calificacion;
            $calificacion->save();
        } else {
            // Si no existe, crear una nueva calificación
            $calificacion = new Calificacion();
            $calificacion->usuario_id = $userId;
            $calificacion->videojuego_id = $game->id;
            $calificacion->calificacion = $request->calificacion;
            $calificacion->save();
        }

        // Redirigir a la ruta 'mostrar' con el ID del juego
        return redirect()->route('mostrar', $game->id);
    }

    // Función para mostrar la vista de crear una calificación para un juego
    public function crear(Game $game)
    {
        // Retorna la vista 'calificacion' con la variable 'game' disponible en la vista
        return view('calificacion', compact('game'));
    }

    // Función para calcular la calificación media de un juego
    public function calificacionMedia($gameId)
    {
        // Obtener todas las calificaciones de un juego especificado
        $calificaciones = Calificacion::where('videojuego_id', $gameId)->pluck('calificacion');

        // Calcular el promedio de las calificaciones
        $calificacionMedia = $calificaciones->avg();

        // Retornar la calificación media
        return $calificacionMedia;
    }
}
