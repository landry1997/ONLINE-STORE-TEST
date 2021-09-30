<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cours;
use App\Models\Piliers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CoursController extends Controller
{
    public function index()
    {
        return view('account.orders.cours')->with('piliers', Piliers::all())->with('cours', Cours::orderBy('id', 'DESC')->get());
    }

    public function create()
    {

        return view('account.orders.addCour')->with('piliers', Piliers::all())->with('users', User::all());
    }

    public function store(Request $request)
    {
        $request->validate([

            'nom' => 'required',
            'nom_en' => 'required',
            'pilierId' => 'required',
            'description' => 'required',
            'description_en' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
        ]);

        if ($request->hasFile('image')) {

            if ($request->file('image')->isValid()) {
                $extension = $request->image->extension();
                $request->image->storeAs('/public', "image-" . time() . "." . $extension);
                $url = Storage::url("image-" . time() . "." . $extension);
            }
        }

        Cours::create([
            'nom' => $request->nom,
            'nom_en' => $request->nom_en,
            'description' => $request->description,
            'description_en' => $request->description_en,
            'createur' => Auth::user()->id,
            'pilierId' => $request->pilierId,
            'image' => $url,
        ]);

        return redirect('list-cours');
    }

    public function show(Cours $cour,Piliers $pilier)
    {

        $cour = Cours::with(['user', 'pilier'])->orderBy('id', 'desc')->get();

        return view('account.orders.coursview', compact(['cour']));
    }

    public function edit($cours)
    {
        $piliers = Piliers::all();
        $cour = Cours::with(['user', 'pilier'])->where('id', $cours)->get();
        return view('account.orders.coursedit', compact(['cour', 'piliers']));
    }

    public function update(Request $request, Cours $cours)
    {
        $request->validate([
            'nom' => 'required',
            'nom_en' => 'required',
            'description' => 'required',
            'description_en' => 'required',
            'pilierId' => 'required',
            'statut' => 'required',
            'type' => 'required',
            'image' =>  'image|mimes:jpeg,png,jpg,gif,svg|max:8192',
        ]);
        if ($request->hasFile('image')) {

            if ($request->file('image')->isValid()) {
                $extension = $request->image->extension();
                $request->image->storeAs('/public', "image-" . time() . "." . $extension);
                $url = Storage::url("image-" . time() . "." . $extension);
            }
        } else {
            $cours = Cours::find($cours->id);
            $cours->nom = $request->nom;
            $cours->nom_en = $request->nom_en;
            $cours->description = $request->description;
            $cours->description_en = $request->description_en;
            $cours->pilierId = $request->pilierId;
            $cours->statut = $request->statut;
            $cours->type = $request->type;

            $cours->save();
            return view('account.orders.cours')->with('piliers', Piliers::all())->with('cours', Cours::orderBy('id', 'DESC')->get());
        }

        $cours = Cours::find($cours->id);
        $cours->nom = $request->nom;
        $cours->nom_en = $request->nom_en;
        $cours->description = $request->description;
        $cours->description_en = $request->description_en;
        $cours->pilierId = $request->pilierId;
        $cours->statut = $request->statut;
        $cours->type = $request->type;
        $cours->image = $url;
        $cours->save();
        return redirect('list-cours');
    }

    public function destroy(Cours $cours)
    {
        $cours->delete();
        return view('account.orders.cours')->with('piliers', Piliers::all())->with('cours', Cours::orderBy('id', 'DESC')->get());
    }
}
