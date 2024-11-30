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
        // dd($request->all());
        $credentials = $request->validate([
            'mem_mail' => ['required', 'email'],
            'mem_password' => ['required', 'min:8'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('user.home')->with('success', 'You have been logged in!');
        }
        return redirect("/login")->withError('Oppes! You have entered invalid credentials');
    }
}
