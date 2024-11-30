<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberRegController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view("admin.members.index");
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
            'mem_name' => ['required', 'string', 'max:255'],
            'mem_mail' => ['required', 'string', 'email', 'max:255'],
            'mem_phone' => ['required', 'max:10', 'min:10'],
            'mem_password' => ['required', 'min:8'],
            'date_of_join' => ['required', 'date'],
            'expiration_date' => ['required', 'date'],
        ]);
        $member = Member::create($attributes);
        Auth::guard('members')->login($member);
        return to_route("admin.members.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
