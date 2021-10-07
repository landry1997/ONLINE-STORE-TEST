<?php

namespace App\Http\Controllers;

use App\Models\Reponses;
use App\Models\Questions;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReponsesController extends Controller
{
    public function index()
    {
        // $reponses = Reponses::with(['user','question'])->orderBy('id', 'desc')->get();

        // return view('apps/reponses/list', compact(['reponses']));

return view('apps/reponses/list')->with('questions', Questions::all())->with('reponses', Reponses::orderBy('id', 'DESC')->get());
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            'contenu' => 'required',
            'questionId' => 'required',
            'reponse' => 'required',
        ]);

        Reponses::create([
            'contenu' => $request->contenu,
            'questionId' => $request->questionId,
            'reponse' => $request->reponse,
            'createur' => Auth::user()->id,
        ]);


        return redirect('liste-des-reponses');
    }


    public function show(Reponses $reponses,User $user,Questions $question)
    {
       // $reponses = Reponses::with(['user','question'])->orderBy('id', 'desc')->get()[0];
        $user = User::all();
        $question = Questions::all();
        return view('apps/reponses/view', compact(['reponses','user','question']));
    }

    public function updateReponseContenu(Request $request, Reponses $reponses)
    {
        $request->validate([
            'contenu' => 'required',
        ]);

        $reponse = Reponses::find($reponses->id);
        $reponse->contenu = $request->contenu;
        $reponse->save();
        return redirect()->back();
    }

    public function updateReponseStatut(Request $request, Reponses $reponses)
    {
        $request->validate([
            'statut' => 'required',
        ]);

        $reponse = Reponses::find($reponses->id);
        $reponse->statut = $request->statut;
        $reponse->save();
        return redirect()->back();
    }


    public function edit(Reponses $reponses)
    {
        //
    }


    public function update(Request $request, Reponses $reponses)
    {
        //
    }


    public function destroy(Reponses $reponses)
    {
        //
    }
}
