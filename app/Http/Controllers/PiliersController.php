<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cours;
use App\Models\Piliers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PiliersController extends Controller
{
    public function index()
    {
        return view('account/orders/piliers')->with('cours', Cours::all())->with('piliers', Piliers::orderBy('id', 'DESC')->get());
    }

    public function create()
    {
        return view('account.orders.addPilier')->with('users', User::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'titre_en' => 'required',
            'contenu' => 'required',
            'contenu_en' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
        ]);

        if ($request->hasFile('image')) {

            if ($request->file('image')->isValid()) {
                $extension = $request->image->extension();
                $request->image->storeAs('/public', "image-" . time() . "." . $extension);
                $url = Storage::url("image-" . time() . "." . $extension);
            }
        }

        Piliers::create([
            'titre' => $request->titre,
            'titre_en' => $request->titre_en,
            'contenu' => $request->contenu,
            'contenu_en' => $request->contenu_en,
            'createur' => Auth::user()->id,
            'image' => $url,
        ]);
        return redirect('list-piliers');
    }

 
    public function show(Piliers $piliers)
    {
        $piliers = Piliers::with(['user'])->orderBy('id', 'desc')->get()[0];
        return view('account.orders.piliersview', compact(['piliers']));
    }

    public function edit(Piliers $piliers)
    {
        return view('account.orders.piliersedit', compact(['piliers']));
    }


    public function update(Request $request, Piliers $piliers)
    {
        $request->validate([
            'titre' => 'required',
            'titre_en' => 'required',
            'contenu' => 'required',
            'contenu_en' => 'required',
            'statut' => 'required',
            'image' =>  'image|mimes:jpeg,png,jpg,gif,svg|max:8192',
        ]);


        if ($request->hasFile('image')) {

            if ($request->file('image')->isValid()) {
                $extension = $request->image->extension();
                $request->image->storeAs('/public', "image-" . time() . "." . $extension);
                $url = Storage::url("image-" . time() . "." . $extension);
            }
        } else {
            $piliers = Piliers::find($piliers->id);
            $piliers->titre = $request->titre;
            $piliers->titre_en = $request->titre_en;
            $piliers->contenu = $request->contenu;
            $piliers->contenu_en = $request->contenu_en;
            $piliers->statut = $request->statut;

            $piliers->save();
            return redirect('list-piliers');
        }

        $piliers = Piliers::find($piliers->id);
        $piliers->titre = $request->titre;
        $piliers->titre_en = $request->titre_en;
        $piliers->contenu = $request->contenu;
        $piliers->contenu_en = $request->contenu_en;
        $piliers->statut = $request->statut;
        $piliers->image = $url;
        $piliers->save();
        return redirect('list-piliers');
    }

    public function destroy(Piliers $piliers)
    {
        $piliers->delete();
        return redirect('list-piliers');
    }
}
