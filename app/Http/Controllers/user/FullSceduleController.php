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
        $color = null;

        foreach ($classes as $class) {
            switch (ucfirst($class->Name)) {
                case "Yoga":
                    $color = '#998A9B';
                    break;
                case 'Boxing':
                    $color = '#81BFDA';
                    break;
                case 'Pilates':
                    $color = '#E195AB';
                    break;
                case 'Combat':
                    $color = '#AF1740';
                    break;
                default:
                    $color = '#729788';
            }
            $arrClasses[] = [
                'start' => $class->start_date,
                'end' => $class->end_date,
                'title' => $class->Name,
                'color' => $color
            ];
        }
        return view('user.schedule', ['classes' => $arrClasses]);
    }
}
