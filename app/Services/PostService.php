<?php

namespace App\Services;

use App\Models\Post;
use App\Models\PostImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostService
{
    public function store($request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',

        ]);


        $images = $request->input('selected_images');
        DB::transaction(function () use ($data, $request,$images) {

            Post::create([
                'title' => $data['title'],
                'content' => $data['content'],
                'user_id'=>1
            ]);

            if ($images){
                foreach ($images as $image) {

                    $imageName = rand(0, 1000000) . '_' . rand(0, 1000000) .
                        '_' . rand(0, 1000000) . '_' . rand(0, 1000000) .
                        '.' . $image->getClientOriginalExtension();

                    $image->move(public_path('/images/post'), $imageName);
                    PostImage::create([
                        'image' => $imageName,
                    ]);
                }
            }
        });


    }
}
