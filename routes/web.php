<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\CalificacionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/pc', [GameController::class, 'index'])->middleware(['auth', 'verified'])->name('pc');
Route::get('/xbox', [GameController::class, 'index2'])->middleware(['auth', 'verified'])->name('xbox');
Route::get('/playstation', [GameController::class, 'index3'])->middleware(['auth', 'verified'])->name('playstation');
Route::get('/switch', [GameController::class, 'index4'])->middleware(['auth', 'verified'])->name('switch');
Route::get('/dashboard', [GameController::class, 'index5'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/games', [GameController::class, 'createGame'])
    ->middleware(['auth', 'verified', 'role:Admin'])
    ->name('games');
Route::post('/games', [GameController::class, 'storeGame'])->middleware(['auth', 'verified', 'role:admin'])->name('games.store');

Route::get('/stores', [GameController::class, 'createStore'])
    ->middleware(['auth', 'verified', 'role:Admin'])
    ->name('stores');
Route::post('/stores', [GameController::class, 'storeStore'])->middleware(['auth', 'verified', 'role:admin'])->name('stores.store');

Route::get('/plataformas', [GameController::class, 'createPlataforma'])
    ->middleware(['auth', 'verified', 'role:Admin'])
    ->name('plataformas');
Route::post('/plataformas', [GameController::class, 'plataformaPlataforma'])->middleware(['auth', 'verified', 'role:admin'])->name('plataforma.plataforma');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/game/{id}', [GameController::class, 'mostrar'])->name('mostrar');

Route::post('/games/{game}/comentarios', [ComentarioController::class, 'store'])->name('comentarios.store');
Route::get('/games/{game}/comentarios/crear', [ComentarioController::class, 'crear'])->name('comentarios.crear');

Route::get('/juegos/{game}/calificacion', [CalificacionController::class, 'crear'])->name('calificacion.crear');
Route::post('/juegos/{game}/calificacion', [CalificacionController::class, 'guardar'])->name('calificacion.guardar');

Route::get('/locale/{locale}', [LangController::class, 'setLang'])->name('setLang');
Route::get('/dashboard/locale/{lange}', [LangController::class, 'setLang']);


require __DIR__ . '/auth.php';
