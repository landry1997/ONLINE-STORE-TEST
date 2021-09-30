<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::truncate();
        Blog::create([
            'titre' => 'cat1',
            'titreEn' => 'catOne',
            'description' => 'aaaaaaaaaaaaa',
            'descriptionEn' => 'qqqqqqqqqqqq',
            'statut' => 'valide',
            'catId' => 1,
            'createur' => 1]);
    }
}
