<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
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
    public function create()
    {
        return view('post.post-form');
    }
    public function store(Request $request)
    {
        dd($request->all());
        $validator = Validator::make($request->all(), [
            'selected_images.*' => 'mimes:jpg,jpeg,png',
        ]);
        $this->postService->store($request);
    }
}
