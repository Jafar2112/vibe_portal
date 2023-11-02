<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\TemporaryImage;
use App\Services\PostService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    protected PostService $postService;

    public function __construct()
    {
        $this->postService = new PostService();
    }
    public function show($id)
    {
        $post = Post::findOrFail($id);

        $other_posts = Post::query()
            ->with('images')
            ->orderBy('id','desc')
            ->where('id','!=',$post->id)
            ->has('images')
            ->take(10)
            ->get();

        $categories = PostCategory::where('post_id',$id)->get();

        return view('post.show',compact('post','categories','other_posts'));
    }

    public function post(Request $request)
    {
        return view('post.post-form');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
