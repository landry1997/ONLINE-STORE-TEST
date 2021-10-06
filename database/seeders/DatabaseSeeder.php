<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RolesSeeder::class);
        $this->call(InteretsSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(PiliersSeeder::class);
        $this->call(CoursSeeder::class);
        $this->call(CategorieFileSeeder::class);
        $this->call(FileSeeder::class);
        $this->call(ZonesSeeder::class);
        $this->call(AbonnementSeeder::class);
        $this->call(UserAbonnementSeeder::class);
        $this->call(CategorieSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(ReponseSeeder::class);
        $this->call(ChoixSeeder::class);
    }
}
