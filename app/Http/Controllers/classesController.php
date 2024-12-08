<?php

namespace App\Http\Controllers;
use App\Models\classes;
use App\Models\Trainer;
use Illuminate\Http\Request;

class classesController extends Controller
{
    public function index()
    {
        $AllTrainer =Trainer::all();
        $allclasses =classes::all();
        return view("admin.classes.index", ['classes' => $allclasses,'coaches' => $AllTrainer]);
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            //'Name' => ['required', 'string', 'max:255'],
          //  'Time' => ['required', 'string', 'email', 'max:255'],
           // 'Date' => ['required', 'max:10', 'min:10'],
          //  'password' => ['required', 'min:8'],
            //'Date' => ['required', 'date'],
            //'expiration_date' => ['required', 'date'],
        ]);
        $class = classes::create([
            'Name' => $request->Name,
            'Time' => $request->Time,
            'Date' => $request->Date,
        ]);
        $class->trainers()->attach($request->coach);
        
        return to_route("admin.classes.index");
    }
}
