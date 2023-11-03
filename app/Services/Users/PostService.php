<?php

namespace App\Services\Users;

use App\Models\Comment;
use App\Models\Notification;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostService
{
    protected NotificationService $notificationService;

    public function __construct()
    {
        $this->notificationService = new NotificationService();
    }

    public function like_or_dislike($id)
    {
        $user = Auth::user();
        $like = $user->likes->contains($id);
        try {
            if ($like) {
                $this->notificationService->delete($id, 1);
                $user->likes()->detach($id);
            } else {
                $this->notificationService->send($id, 1);
                $user->likes()->attach($id);
            }
        } catch (\Exception $exception) {
            return abort(404);
        }
    }

    public function create_comment($request, $id)
    {
        $data = $request->validate([
            'body' => 'required',
        ]);
        $post = Post::findOrFail($id);
        $comment = new Comment([
            'body' => $data['body'],
            'user_id' => Auth::id(),
        ]);
        $post->comments()->save($comment);
    }

    public function delete_comment($id)
    {
        $comment = Comment::findOrFail($id)->delete();
    }

    public function bookmark($id)
    {
        Auth::user()->bookmarks()->toggle($id);
    }

}
