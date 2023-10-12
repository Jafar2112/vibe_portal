<?php

namespace App\Services;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\PostImage;
use App\Models\TemporaryImage;
use App\Models\TemporaryPost;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PostService
{
    public function first_step_post($request, $id)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);
        //Todo change longtext to text
        if ($id) {
            $temporary_post = TemporaryPost::auth_user_and_id($id);
            $temporary_post->update([
                'title' => $data['title'],
                'content' => $data['content'],
            ]);
            return $temporary_post->id;
        }
        $temporary_post = TemporaryPost::create([
            'user_id' => Auth::id(),
            'title' => $data['title'],
            'content' => $data['content'],
        ]);
        return $temporary_post->id;
    }

    public function second_step_post($request, $id)
    {
        $request->validate([
            'image' => 'mimes:png,jpg,jpeg',
        ]);

        $image_name = rand(0, 100000) . '_' . rand(0, 100000) . '_' . rand(0, 100000)
            . '_' . rand(0, 100000). '.'. $request->image->getClientOriginalExtension();

        $request->image->move(public_path('/images/temporary_images'), $image_name);

        TemporaryImage::create([
            'image' => $image_name,
            'post_id' => $id,
        ]);

    }

    public function third_step_post($request, $id)
    {
        $temporary_post = TemporaryPost::auth_user_and_id($id);
        $categories = $request->categories;
        $temporary_images = TemporaryImage::where('post_id', $id)->get();
        DB::transaction(function () use ($temporary_images, $temporary_post, $id, $request, $categories) {
            $post = Post::create([
                'user_id' => $temporary_post->user_id,
                'title' => $temporary_post->title,
                'content' => $temporary_post->content,
            ]);
            if ($temporary_images) {
                foreach ($temporary_images as $image) {
                    PostImage::create([
                        'image' => $image->image,
                        'post_id' => $post->id
                    ]);
                    if (File::exists(public_path('images/temporary_images/' . $image->image))) {
                        File::move(public_path('images/temporary_images/' . $image->image),
                            public_path('images/post/' . $image->image));
                        File::delete(public_path('images/temporary_images/' . $image->image));

                    }
                }

            }
            if ($categories) {
                foreach ($categories as $category) {
                    PostCategory::create([
                        'post_id' => $post->id,
                        'category_id' => $category
                    ]);
                }
            }

            $temporary_post->delete();
            TemporaryImage::where('post_id', $id)->delete();
        });


    }

    public function delete_temporary_image($id)
    {
        $image = TemporaryImage::where(['id' => $id])->firstOrFail();
        if (File::exists(public_path('/images/temporary_images/' . $image->image))) {
            File::delete(public_path('/images/temporary_images/' . $image->image));
        }
        $image->delete();
    }

}
