<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Departamentos::create([
            'codigo' => '212',
            'nombre' => 'TECNOLOGIA',
            'activo' => true,
            'idUsuarioCreacion' => '1'
        ]);

        \App\Models\Departamentos::create([
            'codigo' => '123',
            'nombre' => 'ADMIN',
            'activo' => true,
            'idUsuarioCreacion' => '1'
        ]);

        \App\Models\Departamentos::create([
            'codigo' => '456',
            'nombre' => 'SISTEMAS',
            'activo' => true,
            'idUsuarioCreacion' => '1'
        ]);
    }
}
