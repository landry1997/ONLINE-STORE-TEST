<?php

namespace App\Http\Controllers;

use App\Models\Interets;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InteretsController extends Controller
{

    public function index()
    {
        $interets = Interets::all();
        $users = User::all();
        return view('apps/user-management/interet/list',compact(['interets','users']));
    }


    public function create()
    {
        $interet = Interets::all();
        return view('apps/user-management/interet/create', compact(['interet']));   
    }

  
    public function store(Request $request)
    {
         $request->validate([
            'bio' => 'required',
            'genre' => 'required',
            'pays' => 'required',
            'ville' => 'required', 
            'region' => 'required',
            'statut' => 'required',
            'activite' => 'required', 
            'secteur' => 'required',     
        ]);

        Interets::create([
            'bio' => $request->bio,
            'genre' => $request->genre,
            'pays' => $request->pays,
            'region' => $request->region,
            'statut' => $request->statut,
            'activite' => $request->activite,
            'secteur' => $request->secteur,
            'ville' => $request->ville,
            'createur'=>Auth::user()->id,
        ]);
        return redirect('list-interet');
    }

    public function show(Interets $interets)
    {
        return view('apps/user-management/interet/view', compact(['interets']));
    }

    public function edit(Interets $interet)
    {
        return view('apps/user-management/interet/edit', compact(['interet']));
    }


    public function update(Request $request, Interets $interet)
    {
        $request->validate([
            'bio' => 'required',
            'genre' => 'required',
            'pays' => 'required',
            'ville' => 'required', 
            'region' => 'required',
            'statut' => 'required',
            'activite' => 'required', 
            'secteur' => 'required',   
        ]);
        
        $interet = Interets::find($interet->id);
        $interet->bio = $request->bio;
        $interet->genre = $request->genre;
        $interet->pays = $request->pays;
        $interet->region = $request->region;
        $interet->statut = $request->statut;
        $interet->activite = $request->activite;
        $interet->secteur = $request->secteur;
        $interet->facebook = $request->facebook;
        $interet->linkedin = $request->linkedin;
        $interet->twitter = $request->twitter;
        $interet->siteweb = $request->siteweb;
        $interet->save();
        return redirect('list-interet');
    }
}
