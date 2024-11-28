<?php

namespace App\Http\Controllers;

use App\Models\Member;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //

    public function index()
    {
        return view('user.Registration');
    }



    public function store(Request $request)
    {
        // Member::create($request->only('mem_name','mem_mail','mem_phone'));
        // return redirect('/');
    }
}
