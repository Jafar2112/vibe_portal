<?php

namespace App\Services\Users;

use App\Models\Notification;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use function Livewire\of;

class NotificationService
{
    public function send($post_id = null, $type_id = null, $comment_id = null)
    {
        $post_user_id = null;

        if ($post_id) {
            $post = Post::findOrFail($post_id);
            $post_user_id = $post->user_id;
            if ($post->user_id == Auth::id()) return back();
        }


        $sentence = match ($type_id) {
            1 => 'You have a new like from ',
            2 => 'You have a new comment from ',
        };

        Notification::create([
            'from_user_id' => Auth::id(),
            'post_id' => $post_id,
            'to_user_id' => $post_user_id,
            'content' => $sentence,
            'type_id' => $type_id,
            'comment_id' => $comment_id,
        ]);

    }

    public function delete($post_id = null, $type_id = null, $comment_id = null)
    {

        $auth_user = Auth::user();

        if ($type_id == 1) {
            Notification::where([
                'post_id' => $post_id,
                'type_id' => $type_id,
                'from_user_id' => Auth::id(),
            ])->delete();
        } elseif ($type_id == 2) {

            $notification = Notification::where('comment_id', $comment_id)->first();
            if ($notification->from_user_id == $auth_user->id
                or $notification->to_user_id == $auth_user->id
                or $auth_user->admin == 1) {

                $notification->delete();
            } else {
                return abort(403);
            }
        }

    }
}
