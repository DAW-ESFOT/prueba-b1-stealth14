<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;


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
            if($name=="A todo gas"){
                Movie::create(['name' => $name,])->genre(Genre::factory());
            }
        }
    }
}
