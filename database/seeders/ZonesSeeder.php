<?php

namespace Database\Seeders;

use App\Models\Zones;
use App\Models\Fichiers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Zones::truncate();
      //  DB::table('fichiers_zones')->truncate();
        //DB::table('interets_user')->truncate();

        // $zone_image = Zones::create([
        //     'nom_ville' => 'Douala',
        //     'nom_quartier' => 'nyalla',
        //     'nom_rue' => 'carrefour miss'
        // ]);

        $zone_video = Zones::create([
            'nom_ville' => 'Douala',
            'nom_quartier' => 'yassa',
            'nom_rue' => 'carrefour'
        ]);

        $zone_pdf = Zones::create([
            'nom_ville' => 'Yaounde',
            'nom_quartier' => 'mvan',
            'nom_rue' => 'gare'
        ]);

        $pdf = Fichiers::where('nom' , 'pdf')->first();
        $video = Fichiers::where('nom' , 'video')->first();
        $photo = Fichiers::where('nom' , 'image')->first();

        $pdf -> zones()->attach($zone_pdf);
        $video -> zones()->attach($zone_video);
     //   $photo -> zones()->attach($zone_image);
    }
}
