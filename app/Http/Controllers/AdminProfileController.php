<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Models\Gym;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function index() {
        return view("admin.profile.index"); 
    }

    public function update(Request $request)
    {
        // تحقق من البيانات
        $request->validate([
            'gym_name' => ['required', 'string', 'max:255'],
            'gym_mail' => ['required', 'email', 'max:255'],
            'gym_phone' => ['required', 'digits:10'],
            // 'height' => ['required', 'string', 'max:255'],

            // 'gym_photos' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif']
        ]);

        $gym_admin = Gym::find(1);

        // تحديث البيانات
        $gym_admin->gym_name = $request->gym_name;
        $gym_admin->gym_mail = $request->gym_mail;
        $gym_admin->gym_phone = $request->gym_phone;
        // $gym_admin->height = $request->height;


        $gym_admin->save();

        // إعادة التوجيه إلى الصفحة مع رسالة نجاح
        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}
