<?php

namespace App\Http\Controllers;

use App\Imports\membersImport;
use App\Models\plan;
use App\Models\GymMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Facades\Storage;



class GymMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function importExcelData(request $request){
    $request->validate([
        'import-file' => [ 
        'required',
        'file'],
    ]);
    Excel::import(new membersImport,$request->file('import-file'));
    return redirect()->back()->with('status','Imported Succfully');
    

}

     public function index()
    {
        $allplans = Plan::all();
        $members = GymMember::all();
        return view("admin.members.index", ['gym_members' => $members, 'plans' => $allplans]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'max:10', 'min:10'],
            'password' => ['required', 'min:8'],
            'date_of_join' => ['required', 'date'],
            'expiration_date' => ['required', 'date'],
        ]);
        $member = GymMember::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'date_of_join' => $request->date_of_join,
            'expiration_date' => $request->expiration_date,
        ]);
        $member->plans()->attach($request->plans);
        Auth::guard('gym_members')->login($member);
        return to_route("admin.members.index");
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);
        if (Auth::guard('gym_members')->attempt($credentials)) {
            $request->session()->regenerate();
            $userId = Auth::guard('gym_members')->user()->id;
            // dd($userId);
            return redirect()->route('home', ['id' => $userId]);
            // dd('helloo');
            // return view('user.home');
        }
        // dd('hii');
        return redirect()->route('user.login')->withErrors(['Wrong credentials error', 'Wrong credentials']);
    }
    /**
     * Display the specified resource.
     */
    public function show(GymMember $gymMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $member = GymMember::find($id);
        return view('admin.members.edit', ['member' => $member]);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $member_id)
    {

        $edit_member = GymMember::find($member_id);
        $attributes = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'max:10', 'min:10'],
            'date_of_join' => ['required', 'date'],
            'expiration_date' => ['required', 'date'],
        ]);
        $edit_member->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'date_of_join' => $request->date_of_join,
            'expiration_date' => $request->expiration_date,

        ]);



        $edit_member->save();
        return to_route("admin.members.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        GymMember::find($id)->delete();
        return to_route("admin.members.index");
    }
}
