<?php

namespace App\Http\Controllers;

use App\Models\GymMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class GymMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.members.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'max:10', 'min:10'],
            'password' => ['required', 'min:8'],
            'date_of_join' => ['required', 'date'],
            'expiration_date' => ['required', 'date'],
        ]);
        $member = GymMember::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'date_of_join' => $request->date_of_join,
            'expiration_date' => $request->expiration_date,
        ]);
        Auth::guard('gym_members')->login($member);
        return to_route("admin.members.index");
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);
        if (Auth::guard('gym_members')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }
        return redirect("/login")->withError('Oppes! You have entered invalid credentials');
    }
    /**
     * Display the specified resource.
     */
    public function show(GymMember $gymMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GymMember $gymMember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GymMember $gymMember)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GymMember $gymMember)
    {
        //
    }
}
