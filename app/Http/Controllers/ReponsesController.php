<?php

namespace App\Http\Controllers;

use App\Models\Reponses;
use App\Models\Questions;
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reponses  $reponses
     * @return \Illuminate\Http\Response
     */
    public function show(Reponses $reponses)
    {
        $reponses = Reponses::with(['user','question'])->orderBy('id', 'desc')->get()[0];
        return view('apps/reponses/view', compact(['reponses']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reponses  $reponses
     * @return \Illuminate\Http\Response
     */
    public function edit(Reponses $reponses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reponses  $reponses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reponses $reponses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reponses  $reponses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reponses $reponses)
    {
        //
    }
}
