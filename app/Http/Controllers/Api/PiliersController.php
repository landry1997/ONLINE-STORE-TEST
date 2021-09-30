<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Piliers;
use Illuminate\Http\Request;

class PiliersController extends Controller
{
    public function index()
    {
        $piliers = Piliers::orderBy('id', 'DESC')->get();
        return $piliers->toJson(JSON_PRETTY_PRINT);
    }

    public function show(Piliers $piliers)
    {
        $pilier = Piliers::where('id' , $piliers)->first();
        return $pilier->toJson(JSON_PRETTY_PRINT);
    }
}
