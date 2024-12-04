<?php

namespace App\Http\Controllers;
use App\Models\GymMember;

use Illuminate\Http\Request;

class HealthController extends Controller
{
    //


    public function index($id)
    {
        $gym_member = GymMember::findOrFail($id);

        return view('user.health', compact('gym_member'));
    }
}
