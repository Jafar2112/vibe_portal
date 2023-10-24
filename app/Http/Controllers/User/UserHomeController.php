<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserHomeController extends Controller
{
    public function home()
    {
        $user = Auth::user();
        $following_users = $user->following;
        $user_posts = [];



        foreach ($following_users as $user) {

            $posts = Post::user_id($user->id)->get();

            foreach ($posts as $post) {

                if (empty($post->images)) {
                    $image =null;
                }
                $data = [
                    'title' => $post->title,
                    'content' => $post->content,
                    'image' => $image,
                ];
            }

            array_push($user_posts, $data);
        }
        dd($user_posts);
//        $category_posts = $user->following_categories()->posts()->orderBy('created_at','desc')->get();
//        $following_user_posts = $user->following()->posts()->orderBy('created_at', 'desc')->get();


        return view('user.home', compact('user_posts'));
    }
}
