<?php

namespace App\Http\Controllers;

use App\Models\Zones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ZonesController extends Controller
{

    public function index()
    {
        return view('account/orders/zone')->with('zones', Zones::orderBy('id', 'DESC')->get());
    }

    public function create()
    {
        $zones = Zones::all();
        return view('account/orders/addZone', compact(['zones']));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom_ville' => 'required',
            'nom_quartier' => 'required',
            'nom_rue' => 'required',     
        ]);

        Zones::create([
            'nom_ville' => $request->nom_ville,
            'nom_quartier' => $request->nom_quartier,
            'nom_rue' => $request->nom_rue,
            'createur'=>Auth::user()->id,
        ]);
        return view('account/orders/zone')->with('zones', Zones::orderBy('id', 'DESC')->get());
    }


    public function show(Zones $zones)
    {
        return view('account/orders/zonesview', compact(['zones']));
    }

 
    public function edit(Zones $zones)
    {
        return view('account/orders/zonesedit', compact(['zones']));
    }

   
    public function update(Request $request, Zones $zones)
    {
        $request->validate([
            'nom_ville' => 'required',
            'nom_quartier' => 'required',
            'nom_rue' => 'required',     
        ]);

        $zones = Zones::find($zones->id);
        $zones->nom_ville = $request->nom_ville;
        $zones->nom_quartier = $request->nom_quartier;
        $zones->nom_rue = $request->nom_rue;
        $zones->statut = $request->statut;
        $zones->save();
        return redirect('list-zones');
    }
}
