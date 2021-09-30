<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\UserAbonnent;
use App\Models\Abonnement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserAbonnentController extends Controller
{
    public function index()
    {
        return view('apps/user-management/abonnements/userabonneabonnement')->with('abonnements', UserAbonnent::orderBy('id', 'DESC')->get());
    }
    public function create()
    {
        return view('apps/user-management/abonnements/ajouter')->with('users', User::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'user' => 'required',
        ]);

        // get the current time
        $current = Carbon::now();

        // ajouter jours de la table abonnements
        $prix=DB::table('abonnements')->get()[0];
        $abonneaentExpires = $current->addDays($prix->durée);

        UserAbonnent::create([
            'prix' => $prix->prix,
            'user' => $request->user,
            'dateFin' => $abonneaentExpires,
        ]);

        DB::table('users')
            ->where('id',$request->user)
            ->update(['abonnement'=>'abonné']);

        return redirect('liste-des-abonnements-utilisateurs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserAbonnent  $userAbonnent
     * @return \Illuminate\Http\Response
     */
    public function show(UserAbonnent $userAbonnent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserAbonnent  $userAbonnent
     * @return \Illuminate\Http\Response
     */
    public function edit(UserAbonnent $userAbonnent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserAbonnent  $userAbonnent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserAbonnent $userAbonnent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserAbonnent  $userAbonnent
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserAbonnent $userAbonnent)
    {
        //
    }
}
