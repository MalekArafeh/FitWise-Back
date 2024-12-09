<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use Illuminate\Http\Request;

class FullSceduleController extends Controller
{
    public function index()
    {
        $classes = Classes::all();
        $arrClasses = [];
        foreach ($classes as $class) {
            $arrClasses[] = [
                'start' => $class->start_date,
                'end' => $class->end_date,
                'title' => $class->Name,
            ];
        }
        return view('user.schedule', ['classes' => $arrClasses]);
    }
}
