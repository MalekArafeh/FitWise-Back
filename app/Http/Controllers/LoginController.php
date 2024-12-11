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

    public function destroy(Request $request)
    {
        Auth::guard('gym_members')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('user.login');
    }
}
