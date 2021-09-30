<?php

namespace Database\Seeders;

use App\Models\Fichiers;
use App\Models\TypeFichiers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fichiers::truncate();

        // Fichiers::create([
        //     'nom' => 'image',
        //     'url'=> "storage\logo.png",
        //     'createur' => 1,
        //     'typeId' =>1
        // ]);

        Fichiers::create([
            'nom' => 'video',
            'url'=> "storage\Vegedream - La rue.mp4",
            'createur' => 1,
            'typeId' =>3
        ]);

        Fichiers::create([
            'nom' => 'pdf',
            'url'=> "storage\CDC Lenix Clean.pdf",
            'createur' => 1,
            'typeId' =>2
        ]);

        Fichiers::create([
            'nom' => 'audio',
            'url'=> "storage\Clean Bandit – Rockabye feat. Sean Paul & Anne Marie [Official Video].mp3",
            'createur' => 1,
            'typeId' =>4
        ]);

        // $typeImage = TypeFichiers::where('nom','image');
        // $image->typeFichier()->attach($typeImage);
    }
}
