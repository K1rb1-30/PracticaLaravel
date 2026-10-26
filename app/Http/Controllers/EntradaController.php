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
        $entradas = Entrada::where('user_id', $id_user)->get();
        return view('entrada.meves', compact('entradas'));
    }
    public function create(Concert $concert)
    {
        return view('entradas.create', compact('concert'));
    }
    public function store(Request $request, Concert $concert): RedirectResponse
    {
        // tiene sentido en la cabeza del marc

        $entrada = Entrada::create([
            'concert_id' => $concert->id,
            'user_id' => auth()->id(),
            'preu_pagat' => $request->preu_pagat,
        ]);

        $entrada->save();

        return redirect()->route('entrada.meves')->with('success', 'Entrada comprada!');
    }

    public function assistents(Concert $concert): View
    {
        $concert->load('entradas.user', 'escenari');
        return view('concerts.index', compact('concert'));
    }
}
