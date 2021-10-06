<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Cours;
use App\Models\Questions;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Questions::truncate();

       // $createur = User::where('id' , 1)->first();
       // $cours = Cours::where('id' , 1)->first();


        Questions::truncate();
        Questions::create([
            'contenu' => 'comment etre hereux?',
            'instructions' => 'cochez la bonne reponse',
            'statut' => 'actif',
            'createur' => 2,
            'coursId' => 2,
            ]);

    }
}
