<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'name' => 'Desarrollo Web',
        ]);

        Categoria::create([
            'name' => 'Diseño Web',
        ]);

        Categoria::create([
            'name' => 'Programacion',
        ]);
    }
}
