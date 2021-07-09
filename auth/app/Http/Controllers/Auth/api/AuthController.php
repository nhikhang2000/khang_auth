<?php

namespace App\Http\Controllers\auth\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\UserRegister;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{



    //ham đăng  nhập
    public function login(Request $res){
        $allValue = Validator::make($res->all(),[
            'email' => 'required|email',
            'password' => 'required|',
        ]);
           if($allValue->fails()){
               //return redirect('/login')->withErrors($allValue);
               return response(['message' => 'Validation error']);
            }
            if(!Auth::attempt($res->all())){
                return response(['message' => 'Invaled is credential']);
                //return redirect('/login')->with(['message' => 'Login is invalid']);
            }
            else{
                $user = Auth::user();
                $token =  $user->createToken('authToken')->accessToken;
                return response(['test'=>$user,"token" => $token]);
                //$token =  Auth::user()->createToken('authToken')->accessToken();
                //$user = Auth::user();
               // $token = $user->createToken('MyApp')->accessToken;
               // return response(['user' => $user,'access_token' => $token]);
                //$token = $user->createToken('Token Name')->accessToken;
            }
    }

}
