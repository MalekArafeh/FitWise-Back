<?php

namespace App\Http\Controllers;

use App\Models\GymMember;
use App\Models\Plan;
use App\Models\Trainer;
use App\Models\Classes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

// use App\Http\Controllers\File;

class DashboardController extends Controller
{

    public function index()
    {
        $contents = File::get(storage_path('app/public/data/people_count.json'));
        $json = json_decode(json: $contents, associative: true);
        $count = $json['count'];
        $totalMembers = GymMember::count();
        $totalCoaches = Trainer::count();


        $today = Carbon::now('UTC');
        $endDate = $today->copy()->addDays(7);
        $members = GymMember::whereBetween('expiration_date', [
            $today->toDateString(), // Start date as string
            $endDate->toDateString() // End date as string
        ])->get();

        $expiringSubscriptionsCount = $members->count();

        $allplans = Plan::all();
        $allTrainer = Trainer::all();
        $allclasses = classes::with('trainers')->get();
        return view("admin.dashboard.index", [
            'gym_members' => $members,
            'plans' => $allplans,
            'coaches' => $allTrainer,
            'classes' => $allclasses,
            'totalMembers' => $totalMembers,
            'expiringSubscriptionsCount' => $expiringSubscriptionsCount,
            'totalCoaches' => $totalCoaches,
            'current_members' => $count,
        ]);
    }

    public function sub()
    {
        $today = Carbon::now('UTC');
        $endDate = $today->copy()->addDays(7);
        $members = GymMember::whereBetween('expiration_date', [
            $today->toDateString(), // Start date as string
            $endDate->toDateString() // End date as string
        ])->get();

        // $member = GymMember::find($id);
        return view('admin.dashboard.sub', ['gym_members' => $members]);
    }

    public function status()
    {
        $members = GymMember::all();
        return view('admin.dashboard.status', ['gym_members' => $members]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'current_members' => 'required|integer|min:0',
        ]);

        $jsonFilePath = storage_path('app/public/data/people_count.json');

        $data = [];
        if (file_exists($jsonFilePath)) {
            $data = json_decode(file_get_contents($jsonFilePath), true);
        }

        $data['count'] = $validated['current_members'];

        file_put_contents($jsonFilePath, json_encode($data, JSON_PRETTY_PRINT));


        $members = GymMember::all();
        return view('admin.dashboard.status', ['gym_members' => $members, 'current_members' => $data]);
    }







    //     public function processNumber(Request $request)
    // {
    //     $number = $request->input('number');

    //     // Pass the number to another view or perform any logic
    //     return view('user.home', compact('number'));
    // }

}
