<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Abonnement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbonnementController extends Controller
{
    public function index()
    {
        return view('apps/user-management/abonnements/list')->with('abonnements', Abonnement::orderBy('id', 'DESC')->get());
    }
    public function indexuser()
    {
        return view('apps/user-management/abonnements/userabonnement')->with('abonnements', Abonnement::orderBy('id', 'DESC')->get());
    }

    public function edit(Abonnement $abonnement)
    {
        return view('apps/user-management/abonnements/edit', compact(['abonnement']));
    }

    public function update(Request $request, Abonnement $abonnement,User $user)
    {
        $request->validate([
            'prix' => 'required',
            'durée' => 'required',
        ]);

        $abonnement = Abonnement::find($abonnement->id);
        $abonnement->prix = $request->prix;
        $abonnement->durée = $request->durée;
        $abonnement->createur = Auth::user()->id;
        $abonnement->save();

        return redirect('liste-des-abonnements');
    }
}
