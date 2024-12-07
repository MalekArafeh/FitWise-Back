<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\GymMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
        $id = Auth::guard('gym_members')->user()->id;
        $gymMember = GymMember::find($id);
        $plans = $gymMember->plans;
        return view("user.home", ["plans" => $plans, "member" => $gymMember]);
    }
}
