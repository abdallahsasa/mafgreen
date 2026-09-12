<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show($slug)
    {
        // Strip .html suffix if user or link passes it
        $cleanSlug = preg_replace('/\.html$/', '', $slug);

        $post = Post::where('slug', $cleanSlug)
            ->where('is_published', true)
            ->firstOrFail();

        return view('pages.blog-show', compact('post'));
    }
}
