<?php

namespace App\Http\Controllers;

use App\Models\Concert;
use App\Models\Artista;
use App\Models\Escenari;
use Illuminate\Http\Request;

class ConcertController extends Controller
{
    //
    public function index(){
        //ordena por fecha
        $concerts = Concert::with(['artista','escenari'])->orderBy('data_hora')->get();
        return view('concerts.index', compact('concerts'));
    }

    // GET /artistes/create — Mostrar formulari de creació
    public function create()
    {
        $artistes = Artista::where('actiu', true)->orderBy('nom')->get();
        $escenaris = Escenari::orderBy('nom')->get();
        return view('concerts.create', compact('artistes', 'escenaris'));
    }

    // POST /artistes — Desar un nou artista
    public function store(Request $request)
    {
        //dd($request);
        $validated = $request->validate([
            'artista_id' => 'required|exists:artistas,id',
            'nom' => 'required|string|max:255',
            'data_hora' => 'required|date',
            'durada_minuts' => 'required|integer|min:15|max:300',
            'tipus' => 'required|in:CONCERT,DJ_SET,SHOWCASE,ACUSTIC',
            'escenari_id' => 'required|exists:escenaris,id',
        ]);

        Concert::create($validated);

        return redirect()->route('concerts.index')
            ->with('success', 'Concert creat correctament!');
    }

    // GET /artistes/{artista} — Mostrar un artista
    public function show(Concert $concert)
    {
        return view('concerts.show', compact('concert'));
    }
}
