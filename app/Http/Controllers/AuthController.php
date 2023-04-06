<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function showRegister()
    {
        return view('auth.showregister');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:100',
            'prenom' => 'required|string|max:100',
            'pseudo' => 'required|string|unique:users|max:100',        
            'email' => 'required|email|unique:users',        
            'password' => ['required','string','min:8','regex:/[a-z]/', 'regex:/[0-9]/','regex:/[@$!%*#?&]/'],
           
        ]);

        User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'pseudo' => $request->pseudo,        
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);

        return view('auth.register', ['request'=>$request]);

    }       

    public function showLogin()
    {
        return view('auth.showlogin');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|string|min:8',
        ]);
        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('user.profile');
        }

        return back()->withErrors([
            'email' => 'Email ou mot de passe incorrect'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('magics.index');
    }

}
