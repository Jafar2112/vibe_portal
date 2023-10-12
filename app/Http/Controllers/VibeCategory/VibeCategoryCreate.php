<?php

namespace App\Http\Controllers\VibeCategory;

use App\Http\Controllers\Controller;
use App\Models\TemporaryImage;
use App\Models\TemporaryVibeCategory;
use App\Models\VibeCategory;
use App\Services\VibeCategoryService;
use Illuminate\Http\Request;

class VibeCategoryCreate extends Controller
{
    protected VibeCategoryService $categoryService;

    public function __construct()
    {
        $this->categoryService = new VibeCategoryService();
    }

    public function first_step($id = null)
    {
        $temporary_category = null;
        if ($id) {
            $temporary_category = TemporaryVibeCategory::auth_user_and_id($id);
        }
        return view('vibe.create.first-step', compact('temporary_category',
            'id'));
    }

    public function first_step_post(Request $request, $id=null)
    {
        $get_id = $this->categoryService->first_step_post($request, $id);
        return redirect('/create-vibe-category/second-step/'.$get_id);
    }

    public function second_step($id)
    {
        $images = TemporaryVibeCategory::auth_user_and_id($id)->images;
        return view('vibe.create.second-step', compact('images', 'id'));
    }
    public function second_step_post(Request $request, $id)
    {
        $this->categoryService->second_step_post($request,$id);
        return back();
    }
    public function third_step($id)
    {
        TemporaryVibeCategory::auth_user_and_id($id);
        $categories = VibeCategory::orderBy('name','asc')->get();
        return view('vibe.create.third-step',compact('categories','id'));
    }
    public function third_step_post(Request $request, $id)
    {
        $get_id=$this->categoryService->third_step_post($request,$id);
        return redirect('/vibe/'.$get_id);
    }
}
