<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\ProfileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    protected ProfileService $profileService;

    public function __construct()
    {
        $this->profileService = new ProfileService();
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $posts = $user->posts()->orderBy('id', 'desc')->get();
        return view('user.user-profile', compact('user', 'posts'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('user.my-profile.my-profile-edit', compact('user'));
    }

    public function update(Request $request)
    {
        $this->profileService->edit($request);
        return back()->with('changes-saved','Changes saved!');
    }

    public function change_password()
    {
        $user = Auth::user();
        return view('user.my-profile.change-password', compact('user'));
    }

    public function change_password_post(Request $request)
    {
        $status = $this->profileService->change_password($request);
        if (!$status) return back()->with('invalid-password', 'Invalid password');
        return back()->with('changes-saved','Changes saved!');
    }
    public function other_information()
    {
        $user = Auth::user();
        return view('user.my-profile.other-information',compact('user'));
    }
    public function other_information_post(Request $request)
    {
        $this->profileService->other_information($request);
    }
    public function follow_or_unfollow($id)
    {
        $this->profileService->follow_or_unfollow($id);
    }
}
