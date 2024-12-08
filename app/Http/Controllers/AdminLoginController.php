<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin.login.index');
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
            return redirect()->intended(route("admin.dashboard.index"));
        }
        return redirect(route("admin.login.index"))
            ->with("error", "Login failed");
    }

    public function destroy(Request $request)
    {
        Auth::guard('gym')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login.index');
    }

}
