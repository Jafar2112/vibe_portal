<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserHomeController extends Controller
{
    public function home()
    {
        $user = Auth::user();
        return $user->following->posts()->orderBy('id','desc')->get();
        $category_posts = $user->following_categories()->posts()->orderBy('created_at','desc')->get();
        $following_user_posts = $user->following()->posts()->orderBy('created_at', 'desc')->get();



        return view('user.home');
    }
}
