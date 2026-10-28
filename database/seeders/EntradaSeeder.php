<?php

namespace Database\Seeders;

use App\Models\Entrada;
use Illuminate\Database\Seeder;

class EntradaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Usuaris: 1 = Test User, 2 = A1, 3 = A2, 4-8 = usuaris de la factory
        // Concerts: 1-13 (ConcertSeeder). Cap concert passa de 4 entrades,
        // i l'escenari més petit (Sala Petita) té aforament 200.
        // Amb Entrada::create() salta l'event creating i es genera el codi_entrada.

        // MOTOMAMI Tour (concert 1)
        Entrada::create(['user_id' => 1, 'concert_id' => 1, 'preu_pagat' => 65.00]);
        Entrada::create(['user_id' => 2, 'concert_id' => 1, 'preu_pagat' => 65.00]);
        Entrada::create(['user_id' => 4, 'concert_id' => 1, 'preu_pagat' => 70.50]);

        // Sauce Boyz Tour (concert 2)
        Entrada::create(['user_id' => 3, 'concert_id' => 2, 'preu_pagat' => 45.00]);
        Entrada::create(['user_id' => 5, 'concert_id' => 2, 'preu_pagat' => 45.00]);

        // Most Wanted Tour (concert 3)
        Entrada::create(['user_id' => 1, 'concert_id' => 3, 'preu_pagat' => 90.00]);
        Entrada::create(['user_id' => 2, 'concert_id' => 3, 'preu_pagat' => 90.00]);
        Entrada::create(['user_id' => 6, 'concert_id' => 3, 'preu_pagat' => 95.00]);
        Entrada::create(['user_id' => 7, 'concert_id' => 3, 'preu_pagat' => 85.00]);

        // Cano Showcase Barcelona (concert 4)
        Entrada::create(['user_id' => 3, 'concert_id' => 4, 'preu_pagat' => 25.00]);
        Entrada::create(['user_id' => 8, 'concert_id' => 4, 'preu_pagat' => 25.00]);

        // Ñengo Flow Live (concert 5)
        Entrada::create(['user_id' => 4, 'concert_id' => 5, 'preu_pagat' => 35.00]);
        Entrada::create(['user_id' => 5, 'concert_id' => 5, 'preu_pagat' => 35.00]);
        Entrada::create(['user_id' => 2, 'concert_id' => 5, 'preu_pagat' => 30.00]);

        // Cosa Nuestra World Tour (concert 6)
        Entrada::create(['user_id' => 1, 'concert_id' => 6, 'preu_pagat' => 75.00]);
        Entrada::create(['user_id' => 6, 'concert_id' => 6, 'preu_pagat' => 75.00]);
        Entrada::create(['user_id' => 8, 'concert_id' => 6, 'preu_pagat' => 80.00]);

        // Omar Courtz Acústic (concert 7)
        Entrada::create(['user_id' => 7, 'concert_id' => 7, 'preu_pagat' => 20.00]);
        Entrada::create(['user_id' => 3, 'concert_id' => 7, 'preu_pagat' => 20.00]);

        // Sauce Boyz Acústic Session (concert 8)
        Entrada::create(['user_id' => 2, 'concert_id' => 8, 'preu_pagat' => 22.50]);
        Entrada::create(['user_id' => 4, 'concert_id' => 8, 'preu_pagat' => 22.50]);

        // Debí Tirar Más Fotos DJ Set (concert 9)
        Entrada::create(['user_id' => 1, 'concert_id' => 9, 'preu_pagat' => 40.00]);
        Entrada::create(['user_id' => 5, 'concert_id' => 9, 'preu_pagat' => 40.00]);
        Entrada::create(['user_id' => 6, 'concert_id' => 9, 'preu_pagat' => 42.00]);

        // Cano Live Session (concert 10)
        Entrada::create(['user_id' => 7, 'concert_id' => 10, 'preu_pagat' => 30.00]);
        Entrada::create(['user_id' => 8, 'concert_id' => 10, 'preu_pagat' => 30.00]);

        // Ñengo Flow Showcase (concert 11)
        Entrada::create(['user_id' => 3, 'concert_id' => 11, 'preu_pagat' => 28.00]);
        Entrada::create(['user_id' => 4, 'concert_id' => 11, 'preu_pagat' => 28.00]);

        // Rauw Alejandro Acústic (concert 12)
        Entrada::create(['user_id' => 5, 'concert_id' => 12, 'preu_pagat' => 24.00]);
        Entrada::create(['user_id' => 1, 'concert_id' => 12, 'preu_pagat' => 24.00]);

        // Omar Courtz Showcase (concert 13)
        Entrada::create(['user_id' => 2, 'concert_id' => 13, 'preu_pagat' => 26.00]);
        Entrada::create(['user_id' => 6, 'concert_id' => 13, 'preu_pagat' => 26.00]);
    }
}
