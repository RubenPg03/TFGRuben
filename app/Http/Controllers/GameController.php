<?php

namespace App\Http\Controllers;

use App\Models\JuegoPlataforma;
use App\Models\Plataforma;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Store;

class GameController extends Controller
{
    public function createGame(Request $request)
    {
        $plataformas = Plataforma::all();

        return view('games')->with('plataformas', $plataformas);
    }

    public function storeGame(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'genero' => 'required|string|max:255',
            'fecha_lanzamiento' => 'required|date',
            'imagen' => 'required|image',
            'plataforma' => 'required|array',
        ]);

        $game = new Game();
        $game->titulo = $request->titulo;
        $game->descripcion = $request->descripcion;
        $game->genero = $request->genero;
        $game->fecha_lanzamiento = $request->fecha_lanzamiento;

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombre_imagen = time() . '.' . $imagen->getClientOriginalExtension();
            $imagen->move(public_path('imagenes'), $nombre_imagen);
            $game->imagen = $nombre_imagen;
        }

        $game->save();

        foreach ($request->plataforma as $plataformaId) {
            $gamePlataforma = new JuegoPlataforma();
            $gamePlataforma->videojuego_id = $game->id;
            $gamePlataforma->plataforma_id = $plataformaId;
            $gamePlataforma->save();
        }

        return redirect()->route('games')->with('success', '¡El juego ha sido añadido correctamente!');
    }

    public function createStore(Request $request)
    {
        $videojuegos = Game::all();
        return view('stores', ['videojuegos' => $videojuegos]);
    }

    public function storeStore(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'url_juego_tienda' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
            'videojuego_id' => 'required|exists:videojuegos,id',
        ]);

        $store = new Store();
        $store->nombre = $request->nombre;
        $store->url_juego_tienda = $request->url_juego_tienda;
        $store->precio = $request->precio;
        $store->videojuego_id = $request->videojuego_id;
        $store->save();

        return redirect()->route('stores')->with('success', '¡La tienda ha sido añadida correctamente!');
    }

    public function createPlataforma(Request $request)
    {
        return view('plataformas');
    }

    public function plataformaPlataforma(Request $request)
    {
        $request->validate([
            'plataforma' => 'required|string|max:255',
        ]);

        $plataforma = new Plataforma();
        $plataforma->plataforma = $request->plataforma;
        $plataforma->save();

        return redirect()->route('plataformas')->with('success', '¡La plataforma ha sido añadida correctamente!');
    }

    public function index(Request $request)
    {
        $search = $request->input('search');
        $plataforma_id = 1;

        $query = Game::query();

        if ($search) {
            $query->where('titulo', 'LIKE', '%' . $search . '%');
        }

        if ($plataforma_id) {
            $query->whereHas('plataformas', function ($q) use ($plataforma_id) {
                $q->where('plataforma_id', $plataforma_id);
            });
        }

        $games = $query->get();

        return view('pc')->with('games', $games)->with('search', $search);
    }


    public function index2(Request $request)
    {
        $search = $request->input('search');
        $plataforma_id = 2;

        $query = Game::query();

        if ($search) {
            $query->where('titulo', 'LIKE', '%' . $search . '%');
        }

        if ($plataforma_id) {
            $query->whereHas('plataformas', function ($q) use ($plataforma_id) {
                $q->where('plataforma_id', $plataforma_id);
            });
        }

        $games = $query->get();

        return view('xbox')->with('games', $games)->with('search', $search);
    }

    public function index3(Request $request)
    {
        $search = $request->input('search');
        $plataforma_id = 3;

        $query = Game::query();

        if ($search) {
            $query->where('titulo', 'LIKE', '%' . $search . '%');
        }

        if ($plataforma_id) {
            $query->whereHas('plataformas', function ($q) use ($plataforma_id) {
                $q->where('plataforma_id', $plataforma_id);
            });
        }

        $games = $query->get();

        return view('playstation')->with('games', $games)->with('search', $search);
    }

    public function index4(Request $request)
    {
        $search = $request->input('search');
        $plataforma_id = 4;

        $query = Game::query();

        if ($search) {
            $query->where('titulo', 'LIKE', '%' . $search . '%');
        }

        if ($plataforma_id) {
            $query->whereHas('plataformas', function ($q) use ($plataforma_id) {
                $q->where('plataforma_id', $plataforma_id);
            });
        }

        $games = $query->get();

        return view('switch')->with('games', $games)->with('search', $search);
    }

    public function index5(Request $request)
    {
        $search = $request->input('search');

        $query = Game::query();

        if ($search) {
            $query->where('titulo', 'LIKE', '%' . $search . '%');
        }

        $query->orderBy('titulo', 'asc');

        $games = $query->get();

        return view('dashboard')->with('games', $games)->with('search', $search);
    }

    public function mostrar($id)
    {
        $game = Game::with('plataformas')->findOrFail($id);
        return view('juego')->with('game', $game);
    }

    public function show($id)
    {
        $game = Game::with('tienda')->findOrFail($id);
        return view('juego')->with('game', $game);
    }
}
