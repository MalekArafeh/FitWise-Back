<?php

namespace App\Http\Controllers\user;

use Carbon\carbon;
use App\Http\Controllers\Controller;

use App\Models\Classes;
use App\Models\GymMember;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
        $id = Auth::guard('gym_members')->user()->id;
        $gymMember = GymMember::find($id);
        $plans = $gymMember->plans;
        $twoClasses = classes::with('trainers')->where('start_date', '>=', Carbon::now())
            ->orderBy('start_date', 'asc')
            ->take(2)
            ->get();
        return view("user.home", ["plans" => $plans, "member" => $gymMember, 'classes' => $twoClasses]);
        // dd($twoClasses);
    }
}
