<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Cours;
use App\Models\Questions;
use App\Models\Reponses;
use App\Models\ResponseUser;
use App\Models\UserResponse;
use Illuminate\Database\Seeder;

class ChoixSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ResponseUser::truncate();

        $createur = User::where('id' , 1)->first();
        $cours = Cours::where('id' , 1)->first();
        $apprenant = User::where('id' , 2)->first();
        $reponse = Reponses::where('id' , 1)->first();
        $question = Questions::where('id' , 1)->first();

        ResponseUser::create([
            'createur' => $createur->id,
            'coursId' => $cours->id,
            'questionId' => $question->id,
            'reponseId' => $createur->id,
            'UserId' => $cours->id,
            'statut' => $cours->id,
        ]);
    }
}
