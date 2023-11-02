<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationsController extends Controller
{
    public function index()
    {
        $notifications = Notification::with('from_user')
            ->where('to_user_id',Auth::id())
            ->get();

        return view('user.notifications',compact('notifications'));
    }

}
