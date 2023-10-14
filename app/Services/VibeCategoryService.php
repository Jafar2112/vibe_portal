<?php

namespace App\Services;

use App\Models\TemporaryVibeCategory;
use App\Models\TemporaryVibeCategoryImage;
use App\Models\VibeCategory;
use App\Models\VibeCategoryImages;
use App\Models\VibeCategoryRelatedCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class VibeCategoryService
{
    public function first_step_post($request, $id)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);
        if ($id) {
            $temporary_category = TemporaryVibeCategory::auth_user_and_id($id);
            $temporary_category->update([
                'name' => $data['name'],
                'description' => $data['description'],
                'user_id' => Auth::id(),
            ]);
            return $id;
        }
        $new_temporary_category = TemporaryVibeCategory::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'user_id' => Auth::id(),

        ]);
        return $new_temporary_category->id;
    }

    public function second_step_post($request, $id)
    {
        $request->validate([
            'image' => 'mimes:jpg,jpeg,png',
        ]);
        $image_name = rand(0, 100000) . '_' . rand(0, 100000) . '_' . rand(0, 100000)
            . '_' . rand(0, 100000) . '.' . $request->image->getClientOriginalExtension();

        $request->image->move(public_path('/images/temporary_images'), $image_name);

        TemporaryVibeCategoryImage::create([
            'image' => $image_name,
            'category_id' => $id,
        ]);
    }

    public function third_step_post($request, $id)
    {
        $categories = $request->categories;
        $temporary_category = TemporaryVibeCategory::auth_user_and_id($id);
        $images = TemporaryVibeCategoryImage::where('category_id', $id)->get();
        $new_category_id = null;

        DB::transaction(function () use ($temporary_category, $images, $categories, &$new_category_id, $id) {
            $new_category = VibeCategory::create([
                'name' => $temporary_category->name,
                'description' => $temporary_category->description,
                'user_id' => $temporary_category->user_id,
            ]);
            if ($categories) {
                foreach ($categories as $category) {
                    VibeCategoryRelatedCategory::create([
                        'main_category_id' => $new_category->id,
                        'related_category_id' => $category,
                    ]);
                }
            }
            if ($images) {
                foreach ($images as $image) {
                    VibeCategoryImages::create([
                        'image' => $image->image,
                        'category_id' => $new_category->id,
                    ]);
                    if (File::exists(public_path('images/temporary_images/' . $image->image))) {
                        File::move(public_path('images/temporary_images/' . $image->image),
                            public_path('images/vibe_category/' . $image->image));
                        File::delete(public_path('images/temporary_images/' . $image->image));
                    }
                }
                TemporaryVibeCategoryImage::where('category_id', $id)->delete();
                $temporary_category->delete();

            }
            $new_category_id = $new_category->id;
        });
        return $new_category_id;

    }

}
