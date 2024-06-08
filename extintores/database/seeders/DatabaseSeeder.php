<?php

namespace Database\Seeders;

use App\Models\extintores;
use App\Models\inspecciones;
use App\Models\proveedores;
use App\Models\recargas;
use App\Models\tipos;
use App\Models\ubicacion;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(9)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        ubicacion::factory(8)->create();
        tipos::factory(8)->create();
        proveedores::factory(8)->create();
        extintores::factory(8)->create();
        inspecciones::factory(8)->create();
        recargas::factory(8)->create();
    }
}
