<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Iván Sánchez Vallejo',
            'email' => 'tuxsaveus@gmail.com',
            'password' => bcrypt('ISV@SAVI86'),
        ])->profile()->create([
            'title' => 'Desarrollador Web',
             'biografia' => 'Esta es mi biografia',
             'website' => 'yinware.com',
        ]);

        User::factory(99)->create();
    }
}
