<?php

namespace App\Http\Controllers;

use App\Models\Lieu;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignRequest;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function doLogin(LoginRequest $request){
        dd($request);
    }

    public function signIn(){
        return view('auth.register', ['eglises'=>Lieu::all()]);
    }

    public function doSignIn(){
        return view('auth.login');  
    }
}
