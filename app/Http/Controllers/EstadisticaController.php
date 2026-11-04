<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use App\Models\Concert;
use App\Models\Escenari;
use App\Models\Genere;
use Illuminate\Http\Request;

class EstadisticaController extends Controller
{
    //
    public function index(){
        $top5concert = Concert::with('artista')->withCount('entradas')
            ->orderBy('entradas_count', 'desc')
            ->limit(5)->get();

        $top5artistas = Artista::withCount('concerts')
            ->orderBy('concerts_count', 'desc')
            ->limit(5)->get();

        $recapEscenari = Escenari::withSum('entradas', 'preu_pagat')
            ->get();

        $generesPopulars = Genere::join('artista_genere', 'generes.id', '=', 'artista_genere.genere_id')
            ->join('artistas', 'artista_genere.artista_id', '=', 'artistas.id')
            ->join('concerts', 'artistas.id', '=', 'concerts.artista_id')
            ->join('entradas', 'concerts.id', '=', 'entradas.concert_id')
            ->selectRaw('generes.id, generes.nom, COUNT(entradas.id) as total_entrades')
            ->groupBy('generes.id', 'generes.nom')
            ->orderByDesc('total_entrades')
            ->get();

        $ocupacioEscenari = Escenari::leftJoin('concerts', 'escenaris.id', '=', 'concerts.escenari_id')
            ->leftJoin('entradas', 'concerts.id', '=', 'entradas.concert_id')
            ->selectRaw('escenaris.nom, escenaris.aforament_maxim,
                COUNT(DISTINCT concerts.id) as concerts_count,
                COUNT(entradas.id) as entradas_count,
                ROUND(COUNT(entradas.id) / NULLIF(escenaris.aforament_maxim * COUNT(DISTINCT concerts.id), 0) * 100, 2) as ocupacio')
            ->groupBy('escenaris.id', 'escenaris.nom', 'escenaris.aforament_maxim')
            ->get();

        return view('estadisticas.index', compact('top5concert', 'top5artistas', 'recapEscenari', 'generesPopulars', 'ocupacioEscenari'));
    }
}
