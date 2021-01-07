<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            "Usa caperuza",
            "Lobezno",
            "A todo gas",
        ];
        // Vaciar la tabla.
        Movie::truncate();
        $faker = \Faker\Factory::create();
        // Crear artículos ficticios en la tabla 

        foreach ($names as &$name) {
            Movie::create(['name' => $name,]);
        }
    }
}
