<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserAbonnent;
use Illuminate\Http\Request;

class UserAbonnementController extends Controller
{
    public function index()
    {
        $userabonnement = UserAbonnent::orderBy('id', 'DESC')->get();
        return $userabonnement->toJson(JSON_PRETTY_PRINT);
    }
}
