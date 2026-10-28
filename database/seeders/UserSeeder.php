<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear usuari administrador predefinit
        User::factory()->create([
            'name' => 'A1',
            'email' => 'a1@ins.cat',
            'password' => Hash::make('1234'),
        ]);
        User::factory()->create([
            'name' => 'A2',
            'email' => 'a2@ins.cat',
            'password' => Hash::make('1234'),
        ]);
        // Crear usuaris amb dades generades per Faker
        User::factory(5)->create();
    }
}
