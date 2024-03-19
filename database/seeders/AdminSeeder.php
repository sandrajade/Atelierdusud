<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use \App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Création d'un utilisateur admin
         Admin::factory()->create([
            'name' => 'admin',
            'email' => 'admin@test.fr',
        ]);
    }
}