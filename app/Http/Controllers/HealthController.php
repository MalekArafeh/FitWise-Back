<?php

namespace App\Http\Controllers;
use App\Models\GymMember;

use Illuminate\Http\Request;

class HealthController extends Controller
{
    //


    public function index($id)
    {
        $weights = [70, 70.5, 71, 70.8, 70.4, 70.2, 69.8, 70, 69.5, 69.6, 69.7, 70.1, 70.3, 70.2, 70, 69.8, 69.7, 69.5, 69.6, 69.7, 70.0, 70.2, 70.5, 70.8, 71.0, 70.6, 70.4, 70.2, 70];
        $days = range(1, 30); 
        $gym_member = GymMember::findOrFail($id);
        // dd( $weights);
        return view('user.health', compact('weights', 'days','gym_member'));
        // return view('user.health', compact('weights', 'days','gym_member'));



    }
}
