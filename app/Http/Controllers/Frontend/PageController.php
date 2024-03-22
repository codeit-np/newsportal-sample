<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends BaseController
{
    function home()
    {
        // Get Top 1 News
        $topNews = Post::latest()->limit(1)->get();
        $tending = Post::orderBy('views', 'desc')->limit(2)->get();
        $totalViews = Post::avg('views');
        return view('frontend.home', compact('topNews', 'tending', 'totalViews'));
    }


    function newByCategories($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('frontend.category', compact('category'));
    }


    function post($id)
    {
        $post = Post::find($id);
        $post->increment('views');
        return view('frontend.post', compact('post'));
    }
}
