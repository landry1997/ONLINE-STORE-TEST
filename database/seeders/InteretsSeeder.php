<?php

namespace Database\Seeders;

use App\Models\Interets;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class InteretsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Interets::truncate();

        Interets::create([
            'bio' => 'bio',
            'genre' => 'feminin',
            'pays' => 'cameroun',
            'region' => 'littoral',
            'ville' => 'Edea',
            'activite' => 'etudiant',
            'secteur' => 'informel',
            'statut' => 'invalide',
        ]);

        Interets::create([
            'bio' => 'bio 2',
            'genre' => 'masculin',
            'pays' => 'cameroun',
            'region' => 'littoral',
            'ville' => 'Douala',
            'activite' => 'marchand',
            'secteur' => 'informel',
            'statut' => 'valide',
        ]);

        Interets::create([
            'bio' => 'bio 3',
            'genre' => 'masculin',
            'pays' => 'cameroun',
            'region' => 'centre',
            'ville' => 'yaounde',
            'activite' => 'marchand',
            'secteur' => 'informel',
            'statut' => 'invalide',
        ]);

      }
}
