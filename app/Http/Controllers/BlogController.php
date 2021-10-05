<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Blog::with(['user','categories'])->orderBy('id', 'desc')->get();

        return view('apps.blog.list', compact(['articles']));
    }

    public function indexFiltreBlog()
    {
            $blog =  DB::table('blogs')->where('statut', 'invalide')->orderBy('id','desc');
            $blog2 = DB::table('blogs')->where('statut', 'valide')->orderBy('id','desc');
            $blog5 = DB::table('blogs')->where('created_at', date('y-m-d'))->orderBy('id','desc');
            $blog6 = DB::table('blogs')->where('created_at','>', date('Y-m-d', strtotime("-30 days")))->orderBy('id','desc');
            $blog7 = DB::table('blogs')->where('created_at','>', date('Y-m-d', strtotime("-91 days")))->orderBy('id','desc');
            $blog8 = DB::table('blogs')->where('created_at','>', date('Y-m-d', strtotime("-150 days")))->orderBy('id','desc');

        return view('apps.blog.list')
        ->with(compact('blog'))
        ->with(compact('blog2'))
        ->with(compact('blog5'))
        ->with(compact('blog6'))
        ->with(compact('blog7'))
        ->with(compact('users8'))
        ;
    }
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
