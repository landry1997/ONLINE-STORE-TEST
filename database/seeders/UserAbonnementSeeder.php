<?php

namespace Database\Seeders;

use App\Models\UserAbonnent;
use Illuminate\Database\Seeder;

class UserAbonnementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserAbonnent::truncate();
        UserAbonnent::create(['prix' => '50000','user' => '1']);
    }
}
