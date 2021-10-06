<?php

namespace Database\Seeders;

use App\Models\Questions;
use App\Models\User;
use App\Models\Reponses;
use Illuminate\Database\Seeder;

class ReponseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reponses::truncate();

        $createur = User::where('id' , 1)->first();
        $question = Questions::where('id' , 1)->first();



        // $reponse = Reponses::create([
        //     'contenu' => 'En faisant le sport',
        //     'statut' => 'actif',
        //     'reponse' => 'oui',
        //     'createur' => $createur->id,
        //     'questionId' => $question->id
        // ]);

        $reponse2 = Reponses::create([
            'contenu' => 'En mangeant gras',
            'statut' => 'actif',
            'reponse' => 'non',
            'createur' => $createur->id,
            'questionId' => $question->id
        ]);

        $reponse3 = Reponses::create([
            'contenu' => 'En dormant au moins 5h par jour',
            'statut' => 'actif',
            'reponse' => 'non',
            'createur' => $createur->id,
            'questionId' => $question->id
        ]);

        $reponse4 = Reponses::create([
            'contenu' => 'En faisant le sport',
            'statut' => 'actif',
            'reponse' => 'oui',
            'createur' => $createur->id,
            'questionId' => $question->id
        ]);
    }
}
