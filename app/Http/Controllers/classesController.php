<?php

namespace App\Http\Controllers;

use App\Models\classes;
use App\Models\Trainer;
use Illuminate\Http\Request;

class classesController extends Controller
{
    public function index()
    {
        $AllTrainer = Trainer::all();
        $allclasses = classes::all();
        return view("admin.classes.index", ['classes' => $allclasses, 'coaches' => $AllTrainer]);
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'Name' => ['required', 'string', 'max:255'],
            'start' => ['required'],
            'end' => ['required'],
        ]);
        $class = classes::create([
            'Name' => $request->Name,
            'start_date' => $request->start,
            'end_date' => $request->end,
        ]);
        $class->trainers()->attach($request->coach);

        return to_route("admin.classes.index");
    }
}
