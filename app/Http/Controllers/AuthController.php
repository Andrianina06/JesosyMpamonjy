<?php

namespace App\Http\Controllers;

use App\Models\Lieu;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function doLogin(LoginRequest $request){
        dd(sha1($request->password));
    }

    public function signIn(){
        return view('auth.register', ['eglises'=>Lieu::all()]);
    }
}
