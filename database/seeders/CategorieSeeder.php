<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::truncate();
        Categories::create(['titre' => 'cat1','titreEn' => 'catOne','statut' => 'valide','createur' => 1]);
        Categories::create(['titre' => 'cat2','titreEn' => 'catTwo','statut' => 'valide','createur' => 1]);
        Categories::create(['titre' => 'cat3','titreEn' => 'catThree','statut' => 'valide','createur' => 1]);
    }
}
