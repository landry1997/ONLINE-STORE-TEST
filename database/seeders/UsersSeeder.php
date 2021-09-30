<?php

namespace Database\Seeders;

use App\Models\Interets;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        // DB::table('role_user')->truncate();
        // DB::table('interets_user')->truncate();

        $admin = User::create([
            'name' => 'landry',
            'surname' => 'denmouns',
            'naissance' => '1997-05-10',
            'tel' => '1234567890',
            'photo' => "/storage/SMART_2.JPG",
            'email' => 'landry@smartcodegroup.com',
            'password' => Hash::make('12345678')
        ]);

        $apprenant = User::create([
            'name' => 'apprenant',
            'surname' => 'moutongo',
            'naissance' => '1997-05-10',
            'tel' => '1234567890',
            'photo' => "/storage/SMART_2.JPG",
            'email' => 'apprenant@smartcodegroup.com',
            'password' => Hash::make('12345678')
        ]);

        $tuteur = User::create([
            'name' => 'tuteur',
            'surname' => 'moutongo',
            'naissance' => '1997-05-10',
            'tel' => '1234567890',
            'photo' => "/storage/SMART_2.JPG",
            'email' => 'tuteur@smartcodegroup.com',
            'password' => Hash::make('12345678')
        ]);

        $adminRole = Role::where('name', 'admin')->first();
        $tuteurRole = Role::where('name', 'tuteur')->first();
        $apprenantRole = Role::where('name', 'apprenant')->first();

        $interetsadmin = Interets::where('bio', 'bio')->first();
        $interetsapprenant = Interets::where('bio', 'bio 2')->first();
        $interetstuteur = Interets::where('bio', 'bio 3')->first();

        $admin->interets()->attach($interetsadmin);
        $tuteur->interets()->attach($interetsapprenant);
        $apprenant->interets()->attach($interetstuteur);

        $admin->roles()->attach($adminRole);
        $tuteur->roles()->attach($tuteurRole);
        $apprenant->roles()->attach($apprenantRole);
    }
}
