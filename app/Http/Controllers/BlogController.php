<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Blog::with(['user','categories'])->orderBy('id', 'desc')->get();

        return view('apps.blog.list', compact(['articles']));
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

            'titre' => 'required',
            'titreEn' => 'required',
            'description' => 'required',
            'descriptionEn' => 'required',
            'catId' => 'required',
        ]);

//dd($request);
        Blog::create([
            'titre' => $request->titre,
            'titreEn' => $request->titreEn,
            'description' => $request->description,
            'descriptionEn' => $request->descriptionEn,
            'catId' => $request->catId,
            'statut' => 'valide',
            'createur' => Auth::user()->id,
        ]);

        return redirect(route('blog-list'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $articles = Blog::with(['user', 'categories'])->orderBy('id', 'desc')->get()[0];

        return view('apps.blog.view', compact(['articles']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([

            'titre' => 'required',
            'titreEn' => 'required',
            'description' => 'required',
            'descriptionEn' => 'required',
            'statut' => 'required',
        ]);


        $blog = Blog::find($blog->id);
        $blog->titre = $request->titre;
        $blog->titreEn = $request->titreEn;
        $blog->description = $request->description;
        $blog->descriptionEn = $request->descriptionEn;
        $blog->statut = $request->statut;

        $blog->save();

        return redirect(route('blog-list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
