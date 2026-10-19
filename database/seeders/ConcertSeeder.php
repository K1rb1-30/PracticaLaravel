<?php

namespace Database\Seeders;

use App\Models\Concert;
use App\Models\Escenari;
use Illuminate\Database\Seeder;

class ConcertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Concert::create([
            'nom' => 'MOTOMAMI Tour',
            'artista_id' => 1, // Eladio Carrión 2
            'data_hora' => '2026-11-14 23:00:00',
            'durada_minuts' => 110,
            'tipus' => 'CONCERT',
            'escenari_id' => Escenari::inRandomOrder()->first()->id,
        ]);

        Concert::create([
            'nom' => 'Sauce Boyz Tour',
            'artista_id' => 2, // Eladio Carrión 2
            'data_hora' => '2026-11-14 21:00:00',
            'durada_minuts' => 110,
            'tipus' => 'CONCERT',
            'escenari_id' => Escenari::inRandomOrder()->first()->id,
        ]);

        Concert::create([
            'nom' => 'Most Wanted Tour',
            'artista_id' => 3, // Bad Bunny
            'data_hora' => '2026-12-05 22:00:00',
            'durada_minuts' => 150,
            'tipus' => 'CONCERT',
            'escenari_id' => Escenari::inRandomOrder()->first()->id,
        ]);

        Concert::create([
            'nom' => 'Cano Showcase Barcelona',
            'artista_id' => 4, // Cano
            'data_hora' => '2026-10-20 20:00:00',
            'durada_minuts' => 60,
            'tipus' => 'SHOWCASE',
            'escenari_id' => Escenari::inRandomOrder()->first()->id,
        ]);

        Concert::create([
            'nom' => 'Ñengo Flow Live',
            'artista_id' => 5, // Ñengo Flow
            'data_hora' => '2026-11-02 23:00:00',
            'durada_minuts' => 90,
            'tipus' => 'DJ_SET',
            'escenari_id' => Escenari::inRandomOrder()->first()->id,
        ]);

        Concert::create([
            'nom' => 'Cosa Nuestra World Tour',
            'artista_id' => 6, // Rauw Alejandro
            'data_hora' => '2026-11-28 21:30:00',
            'durada_minuts' => 130,
            'tipus' => 'CONCERT',
            'escenari_id' => Escenari::inRandomOrder()->first()->id,
        ]);

        Concert::create([
            'nom' => 'Omar Courtz Acústic',
            'artista_id' => 7, // Omar Courtz
            'data_hora' => '2026-10-25 19:00:00',
            'durada_minuts' => 45,
            'tipus' => 'ACUSTIC',
            'escenari_id' => Escenari::inRandomOrder()->first()->id,
        ]);

        Concert::create([
            'nom' => 'Sauce Boyz Acústic Session',
            'artista_id' => 2, // Eladio Carrión
            'data_hora' => '2026-10-30 19:30:00',
            'durada_minuts' => 50,
            'tipus' => 'ACUSTIC',
            'escenari_id' => Escenari::inRandomOrder()->first()->id,
        ]);

        Concert::create([
            'nom' => 'Debí Tirar Más Fotos DJ Set',
            'artista_id' => 3, // Bad Bunny
            'data_hora' => '2026-10-18 23:30:00',
            'durada_minuts' => 80,
            'tipus' => 'DJ_SET',
            'escenari_id' => Escenari::inRandomOrder()->first()->id,
        ]);

        Concert::create([
            'nom' => 'Cano Live Session',
            'artista_id' => 4, // Cano
            'data_hora' => '2026-11-10 21:00:00',
            'durada_minuts' => 75,
            'tipus' => 'CONCERT',
            'escenari_id' => Escenari::inRandomOrder()->first()->id,
        ]);

        Concert::create([
            'nom' => 'Ñengo Flow Showcase',
            'artista_id' => 5, // Ñengo Flow
            'data_hora' => '2026-12-01 20:30:00',
            'durada_minuts' => 55,
            'tipus' => 'SHOWCASE',
            'escenari_id' => Escenari::inRandomOrder()->first()->id,
        ]);

        Concert::create([
            'nom' => 'Rauw Alejandro Acústic',
            'artista_id' => 6, // Rauw Alejandro
            'data_hora' => '2026-10-22 19:00:00',
            'durada_minuts' => 40,
            'tipus' => 'ACUSTIC',
            'escenari_id' => Escenari::inRandomOrder()->first()->id,
            ]);

        Concert::create([
            'nom' => 'Omar Courtz Showcase',
            'artista_id' => 7, // Omar Courtz
            'data_hora' => '2026-11-07 20:00:00',
            'durada_minuts' => 50,
            'tipus' => 'SHOWCASE',
            'escenari_id' => Escenari::inRandomOrder()->first()->id,
        ]);
    }
}
