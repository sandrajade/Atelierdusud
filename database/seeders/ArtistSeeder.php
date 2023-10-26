<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use\App\Models\Artist;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artist::create([
            'name' => 'Célia Bessot',
            'description' => 'J’aime me bercer d’art et de culture, j’écris, je dessine, je joue du piano, je chante, je danse. Les mots ont commencé à envahir ma tête en 2018 sans autres choix que de les poser sur le papier pour les en sortir. Depuis j’écris de façon régulière, en débordement ou en rituel…',
            'url' => './asset2.jpeg',
            'status' => 1

        ]);
        Artist::create([
            'name' => '',
            'description' => 'J’aime me bercer d’art et de culture, j’écris, je dessine, je joue du piano, je chante, je danse. Les mots ont commencé à envahir ma tête en 2018 sans autres choix que de les poser sur le papier pour les en sortir. Depuis j’écris de façon régulière, en débordement ou en rituel…',
            'url' => './asset2.jpeg',
            'status' => 1

        ]);
        Artist::create([
            'name' => 'Célia Bessot',
            'description' => 'J’aime me bercer d’art et de culture, j’écris, je dessine, je joue du piano, je chante, je danse. Les mots ont commencé à envahir ma tête en 2018 sans autres choix que de les poser sur le papier pour les en sortir. Depuis j’écris de façon régulière, en débordement ou en rituel…',
            'url' => './asset2.jpeg',
            'status' => 1

        ]);
        Artist::create([
            'name' => 'Célia Bessot',
            'description' => 'J’aime me bercer d’art et de culture, j’écris, je dessine, je joue du piano, je chante, je danse. Les mots ont commencé à envahir ma tête en 2018 sans autres choix que de les poser sur le papier pour les en sortir. Depuis j’écris de façon régulière, en débordement ou en rituel…',
            'url' => './asset2.jpeg',
            'status' => 1

        ]);
        Artist::create([
            'name' => 'Célia Bessot',
            'description' => 'J’aime me bercer d’art et de culture, j’écris, je dessine, je joue du piano, je chante, je danse. Les mots ont commencé à envahir ma tête en 2018 sans autres choix que de les poser sur le papier pour les en sortir. Depuis j’écris de façon régulière, en débordement ou en rituel…',
            'url' => './asset2.jpeg',
            'status' => 1

        ]);
    }
}
