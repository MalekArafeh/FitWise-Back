<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

use App\Models\Classes;
use App\Models\GymMember;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
        $id = Auth::guard('gym_members')->user()->id;
        $gymMember = GymMember::find($id);
        $plans = $gymMember->plans;
        $twoClasses = classes::with('trainers')->orderByRaw("ABS(TIMESTAMPDIFF(SECOND, start_date, NOW()))")->Limit(2)->get();
        return view("user.home", ["plans" => $plans, "member" => $gymMember, 'classes' => $twoClasses]);
        // dd($twoClasses);
    }
}
