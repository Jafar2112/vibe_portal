<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        $users = User::orderBy('id', 'desc')->get();

        if ($query){
            $users = User::where('name','like','%'.$query.'%')
                ->orWhere('email','like','%'.$query.'%')
                ->get();
        }
        return view('admin.users.index', compact('users','query'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.show', compact('user'));
    }

    public function posts(Request $request, $id)
    {
        $posts = Post::user_id($id)->get();
        $query = $request->input('query');
        if ($query) {
            $posts = Post::query()
                ->where('user_id',$id)
                ->where('title', 'like', '%' . $query . '%')
                ->orWhere('content', 'like', '%' . $query . '%')
                ->get();
        }
        $user = User::findOrFail($id);
        return view('admin.users.posts', compact('user', 'posts','query'));
    }
    public function comments(Request $request, $id)
    {

    }
}
