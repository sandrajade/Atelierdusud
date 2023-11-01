<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Category::create([
            'name' => 'Photos',
            'status' => 1,

        ]);
        Category::create([
            'name' => 'porcelaines',
            'status' => 1,

        ]);
        Category::create([
            'name' => 'Gravures',
            'status' => 1,

        ]);
        Category::create([
            'name' => 'Oeuvres Numériques',
            'status' => 1,

        ]);
        Category::create([
            'name' => 'sculptures',
            'status' => 1,

        ]);
        Category::create([
            'name' => 'poèmes',
            'status' => 1,

        ]);
        Category::create([
            'name' => 'théâtres',
            'status' => 1,
            ]);

        Category::create([
            'name' => 'Musiques',
            'status' => 1,

        ]);
    }
}
