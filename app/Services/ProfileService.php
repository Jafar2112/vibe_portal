<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileService
{
    public function edit($request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|email|unique:users,email,' . Auth::id(),
            'about' => 'max:300',
            'profile_photo' => 'mimes:jpg,png,jpeg'
        ]);

        $user = Auth::user();
        $profile_photo_name = $user->profile_photo;

        if ($request->file('profile_photo')) {
            $profile_photo_name = rand(0, 1000000) . '_' . rand(0, 1000000)
                . rand(0, 1000000) . '_' . rand(0, 1000000) . '.'
                . $request->profile_photo->getClientOriginalExtension();
            $request->profile_photo->move(public_path('images/profile_photos'), $profile_photo_name);
        }

        $user->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'about' => $data['about'],
            'profile_photo' => $profile_photo_name,
        ]);
    }

    public function change_password($request)
    {
        $data = $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);
        $user = Auth::user();

        if (!Hash::check($request->input('current_password'), $user->password)) {
            return false;
        }

        $user->update([
            'password' => Hash::make($data['password'])
        ]);
        return true;
    }
    public function other_information($request)
    {

    }
}
