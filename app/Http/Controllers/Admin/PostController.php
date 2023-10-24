<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        $posts = Post::orderBy('id','desc')->get();

        if ($query){
            $posts = Post::query()
            ->where('title', 'like', '%' . $query . '%')
            ->orWhere('content', 'like', '%' . $query . '%')
            ->get();
        }

        return view('admin.posts.index',compact('posts','query'));
    }
}
