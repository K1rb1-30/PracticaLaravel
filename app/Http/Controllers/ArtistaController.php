<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    // GET /artistes — Llistar tots els artistes
    public function index()
    {
        $artistas = Artista::all();
        return view('artistas.index', compact('artistas'));
    }

    // GET /artistes/create — Mostrar formulari de creació
    public function create()
    {
        return view('artistas.form');
    }

    // POST /artistes — Desar un nou artista
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'pais' => 'required|string|max:100',
            'bio' => 'nullable|string',
            'actiu' => 'boolean',
        ]);

        Artista::create($validated);

        return redirect()->route('artistas.index')
            ->with('success', 'Artista creat correctament!');
    }

    // GET /artistes/{artista} — Mostrar un artista
    public function show(Artista $artista)
    {
        return view('artistas.show', compact('artista'));
    }

    // GET /artistes/{artista}/edit — Mostrar formulari d'edició
    public function edit(Artista $artista)
    {
        return view('artistas.form', compact('artista'));
    }

    // PUT /artistes/{artista} — Actualitzar un artista
    public function update(Request $request, Artista $artista)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'pais' => 'required|string|max:100',
            'bio' => 'nullable|string',
            'imatge_url' => 'nullable|url|max:255',
            'actiu' => 'boolean',
        ]);

        $artista->update($validated);

        return redirect()->route('artistas.index')
            ->with('success', 'Artista actualitzat correctament!');
    }

    // DELETE /artistes/{artista} — Eliminar un artista
    public function destroy(Artista $artista)
    {
        $artista->delete();

        return redirect()->route('artistas.index')
            ->with('success', 'Artista eliminat correctament.');
    }
}
