<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:users',
            'surname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'tel' => 'required|unique:users',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('authToken')->accessToken;
        $success['name'] =  $user->name;
        $success['email'] =  $user->email;
        $success['password'] =  $user->password;
        $success['tel'] =  $user->tel;
        $success['surname'] =  $user->surname;
        $message = "utilisateur créé avec succès!";
        return response()->json(['message' =>$message,'success' => $success])->setStatusCode(Response::HTTP_CREATED);
    }
    
    public function login(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        
     
        if (!auth()->attempt($validator)) {
            return response()->json(['error' => 'Unauthorised'], 401);
        } else {
            $success['token'] = auth()->user()->createToken('authToken')->accessToken;
            $success['user'] = auth()->user();
            return response()->json(['success' => $success])->setStatusCode(Response::HTTP_ACCEPTED);
        }
    }

    
    public function forgot_password_sendig_email(Request $request)
    {
        $forgotData = $request->validate(
            [
                'email' => 'required|email',
                'password' =>'required'
            ]
        );
        $email = $request->email; 
        if(User::where('email', $email)->doesntExist()){
            return response([
                'message' =>'utilisateur non reconnu'
            ]);
        }
      
        $user = User::where('email', $email)->update([
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['success' => $success])->setStatusCode(Response::HTTP_ACCEPTED); 
    }
}
