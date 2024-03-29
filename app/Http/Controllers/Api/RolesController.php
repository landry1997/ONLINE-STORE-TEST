<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index()
    {
        $roles = Role::orderBy('id', 'DESC')->get();
        return $roles->toJson(JSON_PRETTY_PRINT);
    }
}
