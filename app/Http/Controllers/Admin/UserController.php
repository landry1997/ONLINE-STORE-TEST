<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
     public function __construct()
     {
        $this->middleware('auth');
     }

    public function index()
    {
        return view('apps/user-management/users/list')->with('users', User::orderBy('id', 'DESC')->get());
    }

    public function indexFiltre()
    {
            $users =  DB::table('users')->where('statut', 'invalide')->orderBy('id','desc');
            $users2 = DB::table('users')->where('statut', 'valide')->orderBy('id','desc');
            $users3 = DB::table('users')->where('abonnement', 'désaboné')->orderBy('id','desc');
            $users4 = DB::table('users')->where('abonnement', 'abonné')->orderBy('id','desc');
            $users5 = DB::table('users')->where('created_at', date('y-m-d'))->orderBy('id','desc');
            $users6 = DB::table('users')->where('created_at','>', date('Y-m-d', strtotime("-30 days")))->orderBy('id','desc');
            $users7 = DB::table('users')->where('created_at','>', date('Y-m-d', strtotime("-91 days")))->orderBy('id','desc');
            $users8 = DB::table('users')->where('created_at','>', date('Y-m-d', strtotime("-150 days")))->orderBy('id','desc');

        return view('apps/user-management/users/list')
        ->with(compact('users'))
        ->with(compact('users2'))
        ->with(compact('users3'))
        ->with(compact('users4'))
        ->with(compact('users5'))
        ->with(compact('users6'))
        ->with(compact('users7'))
        ->with(compact('users8'))
        ;
    }

    public function create()
    {
        $user = User::all();
        $roles = Role::all();
        return view('apps/user-management/users/create', compact(['user','roles']));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'tel' => 'required',
            'email' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'paswword' => 'required',
        ]);

        $now = now();
        $url = "";
        if ($request->hasFile('photo')) {
            if ($request->file('photo')->isValid()) {
                $extension = $request->image->extension();
                $request->image->storeAs('/public', "photo-".time().".".$extension);
                $url = Storage::url("user-".time().".".$extension);
            }
        }

        User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'tel' => $request->tel,
            'email' => $request->email,
            'password' => $request->password,
            'createur'=>Auth::user()->id,
         //   'photo'=>$url,
        ]);
        return view('apps/user-management/users/list')->with('users', User::orderBy('id', 'DESC')->get());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, Role $roles)
    {

        $roles = Role::all();
        return view('apps/user-management/users/view', compact(['user','roles']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, Role $roles)
    {
        $roles = Role::all();
        return view('apps/user-management/users/view', compact(['user','roles']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $user->roles()->sync($request->roles);
        return view('apps/user-management/users/list')->with('users', User::orderBy('id', 'DESC')->get());
    }


    public function updateStatut(Request $request, User $user)
    {
        $request->validate([
            'statut' => 'required',
        ]);

        $user = User::find($user->id);
        $user->statut = $request->statut;
        $user->save();
        return view('apps/user-management/users/list')->with('users', User::orderBy('id', 'DESC')->get());
    }

    public function updateName(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $user = User::find($user->id);
        $user->name = $request->name;
        $user->save();
        return view('apps/user-management/users/list')->with('users', User::orderBy('id', 'DESC')->get());
    }

    public function updatePassword(Request $request, User $user)
    {
        $request->validate([
            'password' => 'required',
        ]);

        $user = User::find($user->id);
        $user->password = Hash::make($request->password);
        $user->save();
        return view('apps/user-management/users/list')->with('users', User::orderBy('id', 'DESC')->get());
    }

    public function updateEmail(Request $request, User $user)
    {
        $request->validate([
            'email' => 'required',
        ]);

        $user = User::find($user->id);
        $user->email = $request->email;
        $user->save();
        return view('apps/user-management/users/list')->with('users', User::orderBy('id', 'DESC')->get());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if(Gate::denies('delete-users')){
            return view('authentication\general\403');
        }
        $user->roles()->detach();
        $user->delete();
        return view('apps/user-management/users/list')->with('users', User::orderBy('id', 'DESC')->get());
    }
}
