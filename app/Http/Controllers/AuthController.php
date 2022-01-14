<?php

namespace App\Http\Controllers;

use App\Http\Requests\auth\AuthCheckRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function index()
    {
        if (auth()->user() != '') {
            return redirect()->intended('user');
        }

        return Inertia::render('Login');
    }

    public function authenticate(AuthCheckRequest $request)
    {
        if (Auth::attempt($request->validated())) {
            $request->session()->regenerate();

            return redirect()->intended('user');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect()->route('login');
    }
}
