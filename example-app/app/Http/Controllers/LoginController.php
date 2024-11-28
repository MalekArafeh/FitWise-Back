<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $table = 'members';

    public function index()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);
        $cridintials = $request->only('email', 'password');
        if (Auth::attempt($cridintials)) {
            $request->session()->regenerate();
            return redirect()->route('user.home')->with('success', 'You have been logged in!');
        }
        return redirect("/login")->withError('Oppes! You have entered invalid credentials');
    }
}
