<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\TemporaryImage;
use App\Models\TemporaryPost;
use App\Models\VibeCategory;
use App\Services\PostService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PostCreate extends Controller
{
    protected PostService $postService;

    public function __construct()
    {
        $this->postService = new PostService();
    }

    public function first_step($id = null)
    {
        $temporary_post = null;
        if ($id) {
            $temporary_post = TemporaryPost::where([
                'user_id' => Auth::id(), 'id' => $id
            ])->firstOrFail();
        }
        return view('post.create.first-step', compact('temporary_post','id'));
    }

    public function first_step_post(Request $request,$id=null)
    {
        $id = $this->postService->first_step_post($request,$id);
        return redirect(route('post.create.second-step', ['id' => $id]));
    }

    public function second_step($id)
    {
        TemporaryPost::auth_user_and_id($id);
        $images = TemporaryImage::where(['post_id' => $id])->get();
        return view('post.create.second-step', compact('id',
            'images'));
    }

    public function second_step_post(Request $request, $id)
    {
        $this->postService->second_step_post($request, $id);
        return back();
    }

    public function delete_temporary_image($id)
    {
        $this->postService->delete_temporary_image($id);
        return response('success', 200);
    }

    public function third_step($id)
    {
        $categories = VibeCategory::orderBy('name', 'asc')->get();
        return view('post.create.third-step', compact('categories', 'id'));
    }

    public function third_step_post(Request $request, $id)
    {
        $this->postService->third_step_post($request, $id);
    }

    public function posts()
    {
        $data = TemporaryPost::pluck('title');
        return response()->json($data);
    }
}
