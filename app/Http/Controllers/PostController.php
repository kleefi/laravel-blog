<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;



class PostController extends Controller
{
    public function index()
    {
        $postSliders = Post::with('category')
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        $postSidebar = Post::with('category')
            ->orderBy('created_at', 'desc')
            ->limit(4)
            ->get();
        return view('public.index', compact(['postSliders', 'postSidebar']));
    }
    public function show(string $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->increment('views');
        return view('public.post', compact('post'));
    }
}
