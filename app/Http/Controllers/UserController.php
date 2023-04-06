<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function Profile()
    {
        $user = Auth::user();

        if (!isset($user)) {
            return redirect()->route('login.show');
        }

        return view('profile', ['user' => $user]);
    }
}

