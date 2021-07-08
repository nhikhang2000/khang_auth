<?php

namespace App\Http\Controllers\auth\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\UserRegister;
class AuthController extends Controller
{
    //ham dang ky
    public function register (UserRegister $req){

        $validated = $req ->validated();
        dd($req);
    }
    //ham dang nhap
    //
}
