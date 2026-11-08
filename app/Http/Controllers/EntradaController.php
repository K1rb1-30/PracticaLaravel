<?php

namespace App\Http\Controllers;

use App\Models\Concert;
use App\Models\Entrada;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EntradaController extends Controller
{
    public function mevesentradas(): View
    {
        //confiamos en que funciona
        $id_user = auth()->id();

        $entradas = Entrada::where('user_id', $id_user)
            ->with('concert.artista')
            ->get();

        $entradas = $entradas->sortBy('concert.data_hora');

        return view('entradas.meves', compact('entradas'));
    }
    public function create(Concert $concert)
    {
        return view('entradas.create', compact('concert'));
    }
    public function store(Request $request, Concert $concert): RedirectResponse
    {
        // tiene sentido en la cabeza del marc
        $request->validate(['preu_pagat' => 'required|numeric|min:0']);

        if ($concert->entradas()->count() >= $concert->escenari->aforament_maxim) {
            return back()->withErrors(['aforament' => 'Aquest concert està ple.']);
        }

        Entrada::create([
            'concert_id' => $concert->id,
            'user_id' => auth()->id(),
            'preu_pagat' => $request->preu_pagat,
        ]);

        return redirect()->route('entradas.meves')->with('success', 'Entrada comprada!');
    }

    public function assistents(Concert $concert): View
    {
        $concert->load('entradas.user', 'escenari');
        return view('entradas.assistents', compact('concert'));
    }
}
