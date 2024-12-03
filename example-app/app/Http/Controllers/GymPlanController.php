<?php

namespace App\Http\Controllers;

use App\Models\Plane;
use Illuminate\Http\Request;

class GymPlanController extends Controller
{
    public function index()
    { 
        $members=Plane::all();
        return view("admin.plan.index",['gym_members'=>$members]);
    }
}
