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
        $top5concert = Concert::withCount('entradas')
            ->orderBy('entradas_count', 'desc')
            ->limit(5)->get();

        $top5artistas = Artista::withCount('concerts')
            ->orderBy('concerts_count', 'desc')
            ->limit(5)->get();

        $recapEscenari = Escenari::withSum('entradas', 'preu_pagat')
            ->get();

        $generesPopulars = Genere::join('artistas_genere', 'genere.id', '=', 'artistas_genere.genere_id')
            ->join('artistas', 'artistas_genere.artista_id', '=', 'artistas.id')
            ->join('concerts', 'artistas.id', '=', 'concerts.artista_id')
            ->join('entradas', 'concerts.id', '=', 'entradas.concert_id')
            ->groupBy('generes.id', 'generes.nom')
            ->orderBy('COUNT(entradas.id)')
            ->get();

        $escenaris = Escenari::withCount(['concerts', 'entradas'])->get();


        $ocupacioEscenari = $escenaris->map(function ($escenari) {
            $aforamentTotal = $escenari->aforament_maxim * $escenari->concerts_count;

            if ($aforamentTotal == 0) {
                $ocupacio = 0;
            } else {
                $ocupacio = round($escenari->entradas_count / $aforamentTotal * 100, 2);
            }

            $escenari->ocupacio = $ocupacio;

            return $escenari;
        });

        return view('estadisticas.index', compact('top5concert', 'top5artistas', 'recapEscenari', 'generesPopulars', 'ocupacioEscenari'));
    }
}
