<?php

namespace Database\Seeders;

use App\Models\Artista;
use App\Models\Genere;
use Illuminate\Database\Seeder;

class ArtistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Artista::create([
            'nom' => 'Rosalía',
            'pais' => 'Espanya',
            'bio' => 'Cantant i compositora catalana.',
            'imatge_url' => null,
            'actiu' => true,
        ]);

        Artista::create([
            'nom' => 'Eladio Carrión',
            'pais' => 'Puerto Rico',
            'bio' => 'Raper i cantant de trap i música urbana, conegut com a "Sauce Boy".',
            'imatge_url' => null,
            'actiu' => true,
        ]);

        Artista::create([
            'nom' => 'Bad Bunny',
            'pais' => 'Puerto Rico',
            'bio' => 'Cantant i compositor de reggaeton i trap llatí, un dels artistes més escoltats del món.',
            'imatge_url' => null,
            'actiu' => true,
        ]);

        Artista::create([
            'nom' => 'Cano',
            'pais' => 'Espanya',
            'bio' => 'Artista de música urbana.',
            'imatge_url' => null,
            'actiu' => true,
        ]);

        Artista::create([
            'nom' => 'Ñengo Flow',
            'pais' => 'Puerto Rico',
            'bio' => 'Raper i cantant puertoriquenyc, referent del rap i el reggaeton des dels anys 2000.',
            'imatge_url' => null,
            'actiu' => true,
        ]);

        Artista::create([
            'nom' => 'Rauw Alejandro',
            'pais' => 'Puerto Rico',
            'bio' => 'Cantant i compositor de reggaeton, trap i R&B, conegut pels seus espectacles i la seva fusió d\'estils.',
            'imatge_url' => null,
            'actiu' => true,
        ]);

        Artista::create([
            'nom' => 'Omar Courtz',
            'pais' => 'Puerto Rico',
            'bio' => 'Jove cantant i compositor de trap i música urbana, una de les noves veus del gènere.',
            'imatge_url' => null,
            'actiu' => true,
        ]);

        Artista::create([
            'nom' => 'Plan B',
            'pais' => 'Puerto Rico',
            'bio' => 'Duo de reggaeton format per Chencho Corleone i Maldy.',
            'imatge_url' => null,
            'actiu' => false,
        ]);

        Artista::create([
            'nom' => 'Wisin & Yandel',
            'pais' => 'Puerto Rico',
            'bio' => 'Duo de reggaeton format per Wisin i Yandel, pioners del gènere.',
            'imatge_url' => null,
            'actiu' => false,
        ]);

        // Asignar los generos a cada artista
        $pop = Genere::where('nom', 'Pop')->first();
        $trap = Genere::where('nom', 'Trap')->first();
        $reggaeton = Genere::where('nom', 'Reggaeton')->first();
        $electro = Genere::where('nom', 'Electro')->first();

        $rosalia = Artista::where('nom', 'Rosalía')->first();
        $rosalia->generes()->attach([$pop->id, $electro->id]);

        $eladio = Artista::where('nom', 'Eladio Carrión')->first();
        $eladio->generes()->attach([$trap->id, $reggaeton->id]);

        $badBunny = Artista::where('nom', 'Bad Bunny')->first();
        $badBunny->generes()->attach([$reggaeton->id, $trap->id, $pop->id]);

        $cano = Artista::where('nom', 'Cano')->first();
        $cano->generes()->attach([$trap->id]);

        $nengo = Artista::where('nom', 'Ñengo Flow')->first();
        $nengo->generes()->attach([$reggaeton->id, $trap->id]);

        $rauw = Artista::where('nom', 'Rauw Alejandro')->first();
        $rauw->generes()->attach([$reggaeton->id, $pop->id, $electro->id]);

        $omar = Artista::where('nom', 'Omar Courtz')->first();
        $omar->generes()->attach([$trap->id, $reggaeton->id]);

        $planB = Artista::where('nom', 'Plan B')->first();
        $planB->generes()->attach([$reggaeton->id]);

        $wisinYandel = Artista::where('nom', 'Wisin & Yandel')->first();
        $wisinYandel->generes()->attach([$reggaeton->id, $pop->id]);



    }
}
