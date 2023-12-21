<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Consultas;
use App\Models\Paciente;
use App\Models\Profissional;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();
        Paciente::factory(10)->create();
            Profissional::factory(5)->create();
            Consultas::factory(10)->create();
        $this->call([

            UserAdminSeeder::class,

        ]);
    }
}
