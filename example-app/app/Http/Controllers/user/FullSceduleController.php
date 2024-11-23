<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FullSceduleController extends Controller
{
    public function index(){
        return view('user.schedule');
    }
}
