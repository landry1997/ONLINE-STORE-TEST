<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        Role::create(['name' => 'admin','name_en' => 'administrator','description' => 'Administre toute la plate-forme','description_en' => 'Administers the entire platform']);
        Role::create(['name' => 'apprenant','name_en' => 'learner','description' => 'Suis une formation sur Adisa','description_en' => 'Take a training course on Adisa']);
        Role::create(['name' => 'tuteur','name_en' => 'tutor','description' => 'Assiste les apprenants','description_en' => 'Assists learners']);
    }
}
