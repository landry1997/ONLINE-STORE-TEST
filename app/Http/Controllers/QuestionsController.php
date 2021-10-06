<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Models\Questions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionsController extends Controller
{
    public function index()
    {
        return view('apps/questions/list')->with('cours', Cours::all())->with('questions', Questions::orderBy('id', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'contenu' => 'required',
            'coursId' => 'required',
            'instructions' => 'required',
        ]);

        Questions::create([
            'contenu' => $request->contenu,
            'coursId' => $request->coursId,
            'instructions' => $request->instructions,
            'createur' => Auth::user()->id,
        ]);


        return redirect('liste-des-questions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function show(Questions $questions)
    {
        $questions = Questions::with(['user','cours'])->orderBy('id', 'desc')->get()[0];
        return view('apps/questions/view', compact(['questions']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function edit(Questions $questions)
    {
        //
    }


    public function update(Request $request, Questions $questions)
    {
        //
    }

    public function updateContenu(Request $request, Questions $questions)
    {
        $request->validate([
            'contenu' => 'required',
        ]);

        $question = Questions::find($questions->id);
        $question->contenu = $request->contenu;
        $question->save();
        return redirect()->back();
    }

    public function updateStatut(Request $request, Questions $questions)
    {
        $request->validate([
            'statut' => 'required',
        ]);

        $question = Questions::find($questions->id);
        $question->statut = $request->statut;
        $question->save();
        return redirect()->back();
    }

    public function destroy(Questions $questions)
    {
        //
    }
}
