<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use App\Models\Genere;
use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    // GET /artistes — Llistar tots els artistes
    public function index()
    {
        $artistas = Artista::with('generes')->orderBy('nom')->get();
        return view('artistas.index', compact('artistas'));
    }

    // GET /artistes/create — Mostrar formulari de creació
    public function create()
    {
        $generes = Genere::all();
        return view('artistas.form', compact('generes'));
    }

    // POST /artistes — Desar un nou artista
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'pais' => 'required|string|max:100',
            'bio' => 'nullable|string',
            'imatge_url' => 'nullable|url|max:255',
            'actiu' => 'boolean',
            'generes' => 'nullable|array|max:6',
            'generes.*' => 'exists:generes,id',
        ]);

        unset($validated['generes']);

        $artista = Artista::create($validated);
        $artista->generes()->sync($request->input('generes', []));

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
        $generes = Genere::all();
        return view('artistas.form', compact('artista', 'generes'));
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
            'generes' => 'nullable|array|max:6',
            'generes.*' => 'exists:generes,id',
        ]);

        unset($validated['generes']);

        $artista->update($validated);
        $artista->generes()->sync($request->input('generes', []));

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
