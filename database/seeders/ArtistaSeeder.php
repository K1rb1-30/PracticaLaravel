<?php

namespace Database\Seeders;

use App\Models\Artista;
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

    }
}
