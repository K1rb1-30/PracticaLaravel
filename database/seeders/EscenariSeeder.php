<?php

namespace Database\Seeders;

use App\Models\Escenari;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EscenariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        Escenari::create(['nom' => 'Escenari Principal', 'aforament_maxim' => 5000, 'ubicacio' => 'Centre del recinte', 'cobert' => false]);
        Escenari::create(['nom' => 'Sala Petita', 'aforament_maxim' => 200, 'ubicacio' => 'Edifici nord', 'cobert' => true]);
        Escenari::create(['nom' => 'Platja', 'aforament_maxim' => 3000, 'ubicacio' => 'Zona sud', 'cobert' => false]);
        Escenari::create(['nom' => 'Carpa Electrònica', 'aforament_maxim' => 1500, 'ubicacio' => 'Zona est', 'cobert' => true]);
    }
}
