<?php

namespace App\Http\Controllers;

use App\Models\GymMember;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //

    public function index($id)
    {
        $gym_member = GymMember::findOrFail($id);

        return view('user.profile', compact('gym_member'));
    }






    public function update(Request $request, $id)
    {
        $gym_member = GymMember::findOrFail($id);

        // تحقق من البيانات
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'weight' => ['required', 'string', 'max:255'],
            'height' => ['required', 'string', 'max:255'],

            'picture' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif']
        ]);

        // تحديث البيانات
        $gym_member->name = $request->name;
        $gym_member->email = $request->email;
        $gym_member->weight = $request->weight;
        $gym_member->height = $request->height;



        // إذا تم رفع صورة جديدة
        if ($request->hasFile('picture')) {
            if ($gym_member->picture) {
                Storage::disk('public')->delete($gym_member->picture);
            }

            // تخزين الصورة الجديدة
            $imagePath = $request->file('picture')->store('profile_images', 'public');
            $gym_member->picture = $imagePath;
        }


        $gym_member->save();

        // إعادة التوجيه إلى الصفحة مع رسالة نجاح
        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}
