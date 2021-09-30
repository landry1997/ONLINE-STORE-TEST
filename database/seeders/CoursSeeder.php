<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Cours;
use App\Models\Piliers;
use Illuminate\Database\Seeder;

class CoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cours::truncate();

        $createur = User::where('id' , 1)->first();

        $pilier = Piliers::where('id' , 1)->first();
        Cours::create([
            'nom' => 'Test',
            'nom_en' => 'Test_en',
            'description' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit',
            'description_en' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'createur' => $createur->id,
            'pilierId' => $pilier->id

        ]);

        $pilier2 = Piliers::where('id' , 2)->first();
        Cours::create([
            'nom' => 'Test2',
            'nom_en' => 'Test_en2',
            'description' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit',
            'description_en' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'createur' => $createur->id,
            'pilierId' => $pilier->id

        ]);

        $pilier3 = Piliers::where('id' , 3)->first();
        Cours::create([
            'nom' => 'Test3',
            'nom_en' => 'Test_en3',
            'description' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit',
            'description_en' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'createur' => $createur->id,
            'pilierId' => $pilier->id

        ]);

        $pilier4 = Piliers::where('id' , 4)->first();
        Cours::create([
            'nom' => 'Test4',
            'nom_en' => 'Test_en4',
            'description' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit',
            'description_en' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'createur' => $createur->id,
            'pilierId' => $pilier->id

        ]);
    }
}
