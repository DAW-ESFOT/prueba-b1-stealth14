<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            "terror",
            "romance",
            "acción",
        ];
        // Vaciar la tabla.
        Genre::truncate();
        $faker = \Faker\Factory::create();
        // Crear artículos ficticios en la tabla 

        foreach ($names as &$name) {
            Genre::create(['name' => $name,]);
        }
    }
}
