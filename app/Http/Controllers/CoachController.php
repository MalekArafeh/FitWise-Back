<?php

namespace App\Http\Controllers;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CoachController extends Controller
{
    public function index()
    {
        $allTrainer = Trainer::all();
        return view("admin.coaches.index", ['coaches' => $allTrainer]);
    }
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'Name' => ['required', 'string', 'max:255'],
            'Email' => ['required', 'string', 'email', 'max:255'],
            'Phone' => ['required', 'max:10', 'min:10'],
            'password' => ['required', 'min:8'],
       
        ]);
        $coach = Trainer::create([
            'Name' => $request->Name,
            'Email' => $request->Email,
            'Phone' => $request->Phone,
            'availability' => $request->availability,
            'password' => Hash::make($request->password),
        ]);
        
        return to_route("admin.coaches.index");
    }
    public function edit($id)
    {
        $coach = Trainer::find($id);
        return view('admin.Coaches.edit', ['coach' => $coach]);
    }
    public function update(Request $request, $id)
    {

        $edit_coach = Trainer::find($id);
        $attributes = request()->validate([
            'Name' => ['required', 'string', 'max:255'],
            'Email' => ['required', 'string', 'email', 'max:255'],
            'Phone' => ['required', 'max:10', 'min:10'],
            //'password' => ['required', 'min:8'],
        ]);
        $edit_coach->update([
            'Name' => $request->Name,
            'Email' => $request->Email,
            'Phone' => $request->Phone,
            'availability' => $request->availability,
          //  'password' => Hash::make($request->password),
        ]);
        


        $edit_coach->save();
        return to_route("admin.coaches.index");
    }
    public function destroy($id)
    {
        Trainer::find($id)->delete();
        return to_route("admin.coaches.index");
    }

}
