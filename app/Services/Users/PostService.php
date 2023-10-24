<?php

namespace App\Services\Users;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostService
{
    public function create_comment($request,$id)
    {
        $data =$request->validate([
            'body'=>'required',
        ]);
        $post = Post::findOrFail($id);
        $comment = new Comment([
            'body' => $data['body'],
            'user_id'=>Auth::id(),
        ]);
        $post->comments()->save($comment);
    }

}
