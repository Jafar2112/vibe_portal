<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use App\Services\Users\PostService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    protected PostService $userPostService;

    public function __construct()
    {
        $this->userPostService = new PostService();
    }

    public function like_or_dislike($id)
    {
        $likes = Auth::user()->likes();
        $like = $likes->contains($id);
        if ($like) {
            $likes->detach();
        } else {
            $likes->attact();
        }
    }

    public function create_comment(Request $request, $id)
    {
        $this->userPostService->create_comment($request,$id);
        return back();
    }

}
