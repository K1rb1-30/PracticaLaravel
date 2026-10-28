<?php

use App\Http\Controllers\EntradaController;
use App\Http\Controllers\EstadisticaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\ConcertController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    //meter aqui lo de abajo para que sea obligatorio tener usuario
    Route::resource('artistas', ArtistaController::class);

    Route::get('/artistas', [ArtistaController::class, 'index'])->name('artistas.index');
    Route::get('/artistas/create', [ArtistaController::class, 'create'])->name('artistas.create');
    Route::post('/artistas', [ArtistaController::class, 'store'])->name('artistas.store');
    Route::get('/artistas/{artista}', [ArtistaController::class, 'show'])->name('artistas.show');
    Route::get('/artistas/{artista}/edit', [ArtistaController::class, 'edit'])->name('artistas.edit');
    Route::put('/artistas/{artista}', [ArtistaController::class, 'update'])->name('artistas.update');


    Route::get('/concerts', [ConcertController::class, 'index'])->name('concerts.index');
    Route::get('/concerts/create', [ConcertController::class, 'create'])->name('concerts.create');
    Route::post('/concerts', [ConcertController::class, 'store'])->name('concerts.store');
    Route::get('/concerts/{concert}', [ConcertController::class, 'show'])->name('concerts.show');



    Route::get('/entradas', [EntradaController::class, 'mevesentradas'])->name('entradas.meves');
    Route::get('/concerts/{concert}/comprar', [EntradaController::class, 'create'])->name('entradas.create');
    Route::post('/concerts/{concert}/comprar', [EntradaController::class, 'store'])->name('entradas.store');
    Route::get('/concerts/{concert}/assistents', [EntradaController::class, 'assistents'])->name('entradas.assistents');

    Route::get('/estadisticas', [EstadisticaController::class, 'index'])->name('estadisticas.index');

});

