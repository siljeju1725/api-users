<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //\App\Models\User::factory()->create
        \App\Models\Cargos::create([
            'codigo' => '123',
            'nombre' => 'DIRECTOR DE TI',
            'activo' => true,
            'idUsuarioCreacion' => '1'
        ]);

        \App\Models\Cargos::create([
            'codigo' => '456',
            'nombre' => 'ADMIN TI',
            'activo' => true,
            'idUsuarioCreacion' => '1'
        ]);

        \App\Models\Cargos::create([
            'codigo' => '789',
            'nombre' => 'ANALISTA DE TI',
            'activo' => true,
            'idUsuarioCreacion' => '1'
        ]);
    }
}
