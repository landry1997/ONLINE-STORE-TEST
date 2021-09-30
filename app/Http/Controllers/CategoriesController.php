<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoriesController extends Controller
{

    public function index()
    {
        return view('apps.categories.list')->with('user', User::all())->with('categories', Categories::orderBy('id', 'DESC')->get()[0]);
        //$categories = Categories::with(['user'])->orderBy('id', 'desc')->get()[0];

        //return view('apps.categories.list', compact(['categories']));
    }


    public function store(Request $request)
    {
        $request->validate([

            'titre' => 'required',
            'titreEn' => 'required',
        ]);

        Categories::create([
            'titre' => $request->titre,
            'titreEn' => $request->titreEn,
            'statut' => 'valide',
            'createur' => Auth::user()->id,
        ]);

        return redirect(route('categories-list'));
    }


    public function show(Categories $categories,User $user)
    {
        $categories = Categories::with(['user'])->orderBy('id', 'desc')->get()[0];

        return view('apps.categories.view', compact(['categories']));
    }



    public function update(Categories $categories, Request $request)
    {
        $request->validate([

            'titre' => 'required',
            'titreEn' => 'required',
            'statut' => 'required',
        ]);


        $categories = Categories::find($categories->id);
       dd($categories->titre);
        $categories->titre = $request->titre;
        $categories->titreEn = $request->titreEn;
        $categories->statut = $request->statut;

        $categories->save();

        return redirect(route('categories-list'));
    }

}
