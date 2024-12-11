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
        $allclasses = classes::with('trainers')->get();

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
    public function edit($id)
    {
        $AllTrainer = Trainer::all();
        $Allclasses = classes::find($id);
        return view('admin.classes.edit', ['classes' => $Allclasses, 'coaches' => $AllTrainer]);
    }
    public function update(Request $request, $member_id)
    {

        $edit_classes = classes::find($member_id);
        $attributes = request()->validate([
            'Name' => ['required', 'string', 'max:255'],
            'Time' => ['required', 'string', 'max:255'],
            'Date' => ['required', 'date'],

        ]);
        $edit_classes->update([
            'Name' => $request->Name,
            'Time' => $request->Time,
            'Date' => $request->Date,

        ]);
        $edit_classes->trainers()->sync($request->coach);


        $edit_classes->save();
        return to_route("admin.classes.index");
    }
    public function destroy($id)
    {
        classes::find($id)->delete();
        return to_route("admin.classes.index");
    }
}
