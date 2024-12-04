<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class GymPlanController extends Controller
{
    public function index()
    { 
        $allplans=Plan::all();
        return view("admin.plan.index",['plans'=>$allplans]);
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'plan_Name' => ['required', 'string', 'max:255'],
            'plan_Description' => ['required', 'string', 'max:255'],
            
            'plan_Price' => ['required', 'max:0', 'min:10'],
        ]);
        $plan = Plan::create([
            'plan_Name' => $request->plan_Name,
            'plan_Description' => $request->plan_Description,
            'plan_Period' => $request->plan_Period,
            'plan_Price' => $request->plan_Price,
            
        ]);
      

        return to_route("admin.plan.index");
    }



    public function destroy($id)
    {
        Plan::find($id)->delete();
        return to_route("admin.members.index");
    }
}
