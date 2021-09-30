<?php

namespace Database\Seeders;

use App\Models\TypeFichiers;
use Illuminate\Database\Seeder;

class CategorieFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeFichiers::truncate();
        TypeFichiers::create(['nom' => 'image']);
        TypeFichiers::create(['nom' => 'livre']);
        TypeFichiers::create(['nom' => 'video']);  
        TypeFichiers::create(['nom' => 'audio']);  
    }
}
