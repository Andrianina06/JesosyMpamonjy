<?php

namespace App\Http\Controllers;

use App\Models\Lieu;
use App\Models\User;
use App\Models\Eglise;
use Illuminate\Http\Request;
use App\Http\Requests\SignRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function doLogin(LoginRequest $request)
    {
        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect(route('user.index'));
        }
        else {
            return back()->withErrors([
                'email' => 'Identifiant incorrect',
                'password' => 'Mot de passe incorrect'
            ]);
        }
    }

    public function signIn()
    {
        return view('auth.register', ['eglises'=>Eglise::all()]);
    }

    public function doSignIn(SignRequest $request)
    {
        $user = $request->validated();
        $user['password'] = Hash::make($request->password);
        User::create($user);
        return redirect(route('login'));  
    }

    public function logOut()
    {
        Auth::logout();
        return redirect(route('login'));
    }
}
