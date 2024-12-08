<?php

namespace App\Http\Controllers;
use App\Models\GymMember;
use App\Models\Classes;
use App\Models\Trainer;

use App\Models\plan;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    //


    public function index()
    {
        $classes =Classes::all();
        $trainer = Trainer::all();
        return view("admin.classes.index", ['classes' => $classes,'trainer'=>$trainer]);
    }




    public function store(Request $request)
    {
        $attributes = request()->validate([
            'class_Name' => ['required', 'string', 'max:255'],
            // 'class_Schedual' => ['required', 'string', 'max:255'],
            // 'time' => ['required', 'string', 'max:255'],
            // 'trainer' => ['required', 'string', 'max:255']

        ]);

        $classes = Classes::create([
            'class_Name' => $request->class_Name,
            // 'class_Schedual' => $request->class_date,
            // 'time' => $request->time,
            // 'trainer' => $request->trainer,
        ]);
        return to_route("admin.classes.index");


    }


}
