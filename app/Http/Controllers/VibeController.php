<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class VibeController extends Controller
{
    public function category()
    {
        return view('vibe.vibe');
    }
    public function categories()
    {
        return view('vibe.vibe-categories');
    }
}
