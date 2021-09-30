<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Cours;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CoursController extends Controller
{
    public function index()
    {
        $cours = Cours::orderBy('id', 'DESC')->get();
        return $cours->toJson(JSON_PRETTY_PRINT);
    }

    public function show(Cours $cours)
    {
        $cour = Cours::where('id' , $cours)->first();
        return $cour->toJson(JSON_PRETTY_PRINT);
    }

    public function updateTermine (Cours $cours)
    {
        $cours->statut = 'terminé';
        $cours->save();

        return response()->json([
            'type' => 'success',
            'message' => 'Vous venez de terminer ce cours avec succès!!',
            'data' => $cours,
        ]);
    }

    public function updateArchive (Cours $cours)
    {
        $cours->statut = 'archivé';
        $cours->save();

        return response()->json([
            'type' => 'success',
            'message' => 'Vous venez de rendre ce cours archivé avec succès!!',
            'data' => $cours,
        ]);
    }

    public function updateDebute (Cours $cours, User $users)
    {
        $cours->statut = 'débuté';
        $cours->participant = Auth::user()->id;
        $cours->save();

        return response()->json([
            'type' => 'success',
            'message' => 'Vous venez de rendre ce cours archivé avec succès!!',
            'data' => $cours,
        ]);
    }
}
