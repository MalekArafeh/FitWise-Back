<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            "gym_mail" => "required",
            "password" => "required",
        ]);
        $credentials = $request->only("gym_mail", "password");
        if (Auth::guard('gym')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return redirect(route("admin.login"))
            ->withErrors(["Wrong credentials error", "Login failed"]);
    }
}
