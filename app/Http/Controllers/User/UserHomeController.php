<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use App\Models\VibeCategory;
use Illuminate\Support\Facades\Auth;

class UserHomeController extends Controller
{
    public function home()
    {
        $user = Auth::user();

        $following_user_ids = $user->following->pluck('id')->toArray();
        $following_categories = $user->following_categories->pluck('id')->toArray();
        $posts = Post::query()
            ->with(['user', 'images', 'category'])
            ->orderBy('id', 'desc')
            ->whereHas('user', function ($query) use ($following_user_ids,$user) {
                $query->where('user_id', $following_user_ids);

            })->orWhereHas('category', function ($query) use ($following_categories) {
                $query->where('category_id', $following_categories);

            })->get();

        return view('user.home', compact('posts'));
    }
}
