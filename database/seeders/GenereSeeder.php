<?php

namespace Database\Seeders;

use App\Models\Genere;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Genere::create([
            'nom' => 'Pop',
        ]);
        Genere::create([
            'nom' => 'Trap',
        ]);
        Genere::create([
            'nom' => 'Reggaeton',
        ]);
        Genere::create([
            'nom' => 'Electro',
        ]);
        Genere::create([
            'nom' => 'Rock',
        ]);
        Genere::create([
            'nom' => 'Lo-fi',
        ]);
    }
}
