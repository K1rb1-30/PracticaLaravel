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
        $concert->id();
        $validated = $request->validate([
            'concert_id' => 'required|exists:concerts,id',
            'preu_pagat' => 'required|decimal',
        ]);

    }

    public function assistents(Concert $concert): View
    {

    }
}
