<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberRegistrationController extends Controller
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
        request()->validate([
            'mem_name' => ['required', 'string', 'max:255'],
            'mem_mail' => ['required', 'string', 'email', 'max:255'],
            'mem_phone' => ['required', 'max:10', 'min:10'],
            'password' => ['required', 'min:8'],
            'date_of_join' => ['required', 'date'],
            'expiration_date' => ['required', 'date'],
        ]);
        Member::create([
            'mem_name' => $request->mem_name,
            'mem_phone' => $request->mem_phone,
            'mem_mail' => $request->mem_mail,
            'password' => $request->mem_password,
            'date_of_join' => $request->date_of_join,
            'expiration_date' => $request->expiration_date,
        ]);
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
