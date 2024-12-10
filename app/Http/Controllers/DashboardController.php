<?php

namespace App\Http\Controllers;
use App\Models\GymMember;
use App\Models\Plan;
use App\Models\Trainer;
use App\Models\classes;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index() {
        $members = GymMember::all();
        $allplans = Plan::all();
        $allTrainer = Trainer::all();
        $allclasses =classes::with('trainers')->get();
        return view("admin.dashboard.index", ['gym_members' => $members, 'plans' => $allplans, 'coaches' => $allTrainer, 'classes' => $allclasses]); 
    }
}