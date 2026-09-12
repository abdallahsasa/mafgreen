<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\ProjectReference;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexEn()
    {
        $projects = ProjectReference::orderBy('sort_order')->get();
        $latestPost = Post::where('is_published', true)->latest('published_at')->first();

        return view('pages.home-en', compact('projects', 'latestPost'));
    }

    public function indexAr()
    {
        $projects = ProjectReference::orderBy('sort_order')->get();
        $latestPost = Post::where('is_published', true)->latest('published_at')->first();

        return view('pages.home-ar', compact('projects', 'latestPost'));
    }
}
