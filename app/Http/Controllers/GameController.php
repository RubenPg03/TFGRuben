<?php

namespace App\Http\Controllers;

use App\Models\JuegoPlataforma;
use App\Models\Plataforma;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Store;

class GameController extends Controller
{
    // Muestra la vista para crear un nuevo juego
    public function createGame(Request $request)
    {
        // Obtiene todas las plataformas disponibles
        $plataformas = Plataforma::all();

        // Retorna la vista 'games' con las plataformas
        return view('games')->with('plataformas', $plataformas);
    }

    // Almacena un nuevo juego en la base de datos
    public function storeGame(Request $request)
    {
        // Valida los datos del request
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'genero' => 'required|string|max:255',
            'fecha_lanzamiento' => 'required|date',
            'imagen' => 'required|image',
            'plataforma' => 'required|array',
        ]);

        // Crea una nueva instancia de Game
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


        // Guarda el juego en la base de datos
        $game->save();

        // Guarda la relación entre el juego y las plataformas seleccionadas
        foreach ($request->plataforma as $plataformaId) {
            $gamePlataforma = new JuegoPlataforma();
            $gamePlataforma->videojuego_id = $game->id;
            $gamePlataforma->plataforma_id = $plataformaId;
            $gamePlataforma->save();
        }

        // Redirige a la ruta 'games' con un mensaje de éxito
        return redirect()->route('games')->with('success', '¡El juego ha sido añadido correctamente!');
    }

    // Muestra la vista para crear una nueva tienda
    public function createStore(Request $request)
    {
        // Obtiene todos los juegos disponibles
        $videojuegos = Game::all();
        // Retorna la vista 'stores' con los juegos
        return view('stores', ['videojuegos' => $videojuegos]);
    }

    // Almacena una nueva tienda en la base de datos
    public function storeStore(Request $request)
    {
        // Valida los datos del request
        $request->validate([
            'nombre' => 'required|string|max:255',
            'url_juego_tienda' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
            'videojuego_id' => 'required|exists:videojuegos,id',
        ]);

        // Crea una nueva instancia de Store
        $store = new Store();
        $store->nombre = $request->nombre;
        $store->url_juego_tienda = $request->url_juego_tienda;
        $store->precio = $request->precio;
        $store->videojuego_id = $request->videojuego_id;
        // Guarda la tienda en la base de datos
        $store->save();

        // Redirige a la ruta 'stores' con un mensaje de éxito
        return redirect()->route('stores')->with('success', '¡La tienda ha sido añadida correctamente!');
    }

    // Muestra la vista para crear una nueva plataforma
    public function createPlataforma(Request $request)
    {
        // Retorna la vista 'plataformas'
        return view('plataformas');
    }

    // Almacena una nueva plataforma en la base de datos
    public function plataformaPlataforma(Request $request)
    {
        // Valida los datos del request
        $request->validate([
            'plataforma' => 'required|string|max:255',
        ]);

        // Crea una nueva instancia de Plataforma
        $plataforma = new Plataforma();
        $plataforma->plataforma = $request->plataforma;
        // Guarda la plataforma en la base de datos
        $plataforma->save();

        // Redirige a la ruta 'plataformas' con un mensaje de éxito
        return redirect()->route('plataformas')->with('success', '¡La plataforma ha sido añadida correctamente!');
    }

    // Muestra la lista de juegos filtrados por búsqueda y plataforma PC
    public function index(Request $request)
    {
        $search = $request->input('search');
        $plataforma_id = 1;

        $query = Game::query();

        // Filtra los juegos por el término de búsqueda
        if ($search) {
            $query->where('titulo', 'LIKE', '%' . $search . '%');
        }

        // Filtra los juegos por la plataforma PC
        if ($plataforma_id) {
            $query->whereHas('plataformas', function ($q) use ($plataforma_id) {
                $q->where('plataforma_id', $plataforma_id);
            });
        }

        $games = $query->get();

        // Retorna la vista 'pc' con los juegos filtrados y el término de búsqueda
        return view('pc')->with('games', $games)->with('search', $search);
    }

    // Muestra la lista de juegos filtrados por búsqueda y plataforma Xbox
    public function index2(Request $request)
    {
        $search = $request->input('search');
        $plataforma_id = 2;

        $query = Game::query();

        // Filtra los juegos por el término de búsqueda
        if ($search) {
            $query->where('titulo', 'LIKE', '%' . $search . '%');
        }

        // Filtra los juegos por la plataforma Xbox
        if ($plataforma_id) {
            $query->whereHas('plataformas', function ($q) use ($plataforma_id) {
                $q->where('plataforma_id', $plataforma_id);
            });
        }

        $games = $query->get();

        // Retorna la vista 'xbox' con los juegos filtrados y el término de búsqueda
        return view('xbox')->with('games', $games)->with('search', $search);
    }

    // Muestra la lista de juegos filtrados por búsqueda y plataforma PlayStation
    public function index3(Request $request)
    {
        $search = $request->input('search');
        $plataforma_id = 3;

        $query = Game::query();

        // Filtra los juegos por el término de búsqueda
        if ($search) {
            $query->where('titulo', 'LIKE', '%' . $search . '%');
        }

        // Filtra los juegos por la plataforma PlayStation
        if ($plataforma_id) {
            $query->whereHas('plataformas', function ($q) use ($plataforma_id) {
                $q->where('plataforma_id', $plataforma_id);
            });
        }

        $games = $query->get();

        // Retorna la vista 'playstation' con los juegos filtrados y el término de búsqueda
        return view('playstation')->with('games', $games)->with('search', $search);
    }

    // Muestra la lista de juegos filtrados por búsqueda y plataforma Switch
    public function index4(Request $request)
    {
        $search = $request->input('search');
        $plataforma_id = 4;

        $query = Game::query();

        // Filtra los juegos por el término de búsqueda
        if ($search) {
            $query->where('titulo', 'LIKE', '%' . $search . '%');
        }

        // Filtra los juegos por la plataforma Switch
        if ($plataforma_id) {
            $query->whereHas('plataformas', function ($q) use ($plataforma_id) {
                $q->where('plataforma_id', $plataforma_id);
            });
        }

        $games = $query->get();

        // Retorna la vista 'switch' con los juegos filtrados y el término de búsqueda
        return view('switch')->with('games', $games)->with('search', $search);
    }

    // Muestra la lista de juegos filtrados por búsqueda y ordenados alfabéticamente
    public function index5(Request $request)
    {
        $search = $request->input('search');

        $query = Game::query();

        // Filtra los juegos por el término de búsqueda
        if ($search) {
            $query->where('titulo', 'LIKE', '%' . $search . '%');
        }

        // Ordena los juegos alfabéticamente por título
        $query->orderBy('titulo', 'asc');

        $games = $query->get();

        // Retorna la vista 'dashboard' con los juegos filtrados y el término de búsqueda
        return view('dashboard')->with('games', $games)->with('search', $search);
    }

    // Muestra los detalles de un juego específico por ID
    public function mostrar($id)
    {
        $game = Game::with('plataformas')->findOrFail($id);
        // Retorna la vista 'juego' con los detalles del juego
        return view('juego')->with('game', $game);
    }

    // Muestra los detalles de un juego específico por ID, incluyendo la tienda
    public function show($id)
    {
        $game = Game::with('tienda')->findOrFail($id);
        // Retorna la vista 'juego' con los detalles del juego y la tienda
        return view('juego')->with('game', $game);
    }
}
