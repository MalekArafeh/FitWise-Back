<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

use App\Models\Classes;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $twoClasses = classes::with('trainers')->orderByRaw("ABS(TIMESTAMPDIFF(SECOND, start_date, NOW()))")->Limit(2)->get();
        // dd($twoClasses);
        return view("user.home", ['classes' => $twoClasses]);
    }
}
