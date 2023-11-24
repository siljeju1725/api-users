<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Users::create([
            'usuario' => 'siljeju',
            'primerNombre' => 'Silvana',
            'segundoNombre' => 'Jenny',
            'primerApellido' => 'Rodriguez',
            'segundoApellido' => 'Carrion',
            'idDepartamento' => '123',
            'idCargo' => '123'
        ]);

        \App\Models\Users::create([
            'usuario' => 'joter',
            'primerNombre' => 'Jonathan',
            'segundoNombre' => 'Eduardo',
            'primerApellido' => 'Teran',
            'segundoApellido' => 'Triana',
            'idDepartamento' => '123',
            'idCargo' => '123'
        ]);

    }
}
