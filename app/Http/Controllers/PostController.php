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
            ->where('is_slider', true)
            ->orderBy('created_at', 'desc')
            ->limit(4)
            ->get();
        $digitalMarketing = Post::with('category')
            ->whereHas('category', function ($query) {
                $query->where('title', 'Digital Marketing');
            })
            ->latest()
            ->get();
        $webDev = Post::with('category')
            ->whereHas('category', function ($query) {
                $query->where('title', 'Web Development');
            })
            ->latest()
            ->get();
        $uiux = Post::with('category')
            ->whereHas('category', function ($query) {
                $query->where('title', 'UI/UX Design');
            })
            ->latest()
            ->get();
        $digitalMarketingThumbs = $digitalMarketing->take(2);
        $digitalMarketingList = $digitalMarketing->slice(2);
        $webThumbs = $webDev->take(1);
        $webList = $webDev->slice(1);
        $uiuxThumbs = $uiux->take(1);
        $uiuxList = $uiux->slice(1);
        return view('public.index', compact([
            'postSliders',
            'digitalMarketing',
            'digitalMarketingThumbs',
            'digitalMarketingList',
            'webDev',
            'webThumbs',
            'webList',
            'uiux',
            'uiuxThumbs',
            'uiuxList'
        ]));
    }
    public function show(string $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->increment('views');
        return view('public.post', compact('post'));
    }
}
