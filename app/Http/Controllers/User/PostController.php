<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use App\Models\User;
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
        $this->userPostService->like_or_dislike($id);
        return back();
    }

    public function create_comment(Request $request, $id)
    {
        $this->userPostService->create_comment($request, $id);
        return back();
    }
    public function bookmark($id)
    {
        $this->userPostService->bookmark($id);
        return back();
    }

}
