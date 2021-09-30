<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        return view('apps/user-management/roles/list')->with('roles', Role::orderBy('id', 'DESC')->get());
    }
}
