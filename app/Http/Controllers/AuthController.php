<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Models\User;
class AuthController extends Controller
{


    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string',
            'email' => 'required|string|unique:users',
            'password' => 'required|string|confirmed|min:8'
        ]);
        if($validator->fails())
        {
            return response()->json('error' ,  $validator->errors[0].name,400);
        }

        $user = User::create(array_merge(
            $validator->validated(),
            ['password' =>bcrypt($request->password) ,
            ]
        ));

        return response()->json( [
            "message" => "Register Successfully",
            "user"=>$user,
        ],200);

    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' => 'required|string',
            'password' => 'required|string'
        ]);
        if($validator->fails())
        {
            return response()->json($validator->errors(),422);
        }
        if(!$token = auth()->attempt($validator->validated()))
        {
            return response()->json(['error'=>'unAuthorized !'],401);
        }
        return $this->createNewToken($token);
    }

    public function createNewToken($token){
        return response()->json([
            'token' => $token ,
            'token_type' => 'Bearer' ,
            'expires_in' => auth()->factory()->getTTL()*60 ,
            'user' => auth()->user()
        ]);
    }

    public function profile()
    {

        return response()->json([
            'user' => auth()->user()
        ],200);
    }

    public function logout()
    {

        auth('api')->logout();
        return response()->json(
            ['user logged out !'],200
        );
    }
}
