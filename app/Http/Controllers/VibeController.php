<?php

namespace App\Http\Controllers;

use App\Models\VibeCategory;
use App\Models\VibeCategoryRelatedCategory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VibeController extends Controller
{
    public function show($id)
    {
        $category = VibeCategory::findOrFail($id);
        $related_categories = VibeCategoryRelatedCategory::where('main_category_id',$id)->get();
        return view('vibe.vibe',compact('category','related_categories'));
    }
}
