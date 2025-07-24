<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        $posts = Post::with('category')->paginate(10);
        return view('admin.posts', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.form', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);
        $validated['slug'] = Str::slug($request->title);
        $validated['user_id'] = auth()->id(); // Tambahkan ini
        $validated['is_slider'] = $request->has('is_slider') ? 1 : 0;


        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $validated['image'] = $imagePath;
        }

        try {
            Post::create($validated);
            return redirect()->back()->with('success', 'Post berhasil ditambah');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Post gagal ditambah');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('public.post', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $categories = Category::all();
        return view('admin.form', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);
        $post = Post::findOrFail($id);
        $validated['slug'] = Str::slug($request->title);
        $validated['user_id'] = auth()->id();
        $validated['is_slider'] = $request->has('is_slider');

        if ($request->hasFile('image')) {
            if ($post->image && Storage::disk('public')->exists($post->image)) {
                Storage::disk('public')->delete($post->image);
            }

            $imagePath = $request->file('image')->store('uploads', 'public');
            $validated['image'] = $imagePath;
        }

        try {
            $post->update($validated);
            return redirect()->route('posts.edit', $post->slug)->with('success', 'Post berhasil diupdate');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Post gagal diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        if ($post->image && Storage::disk('public')->exists($post->image)) {
            Storage::disk('public')->delete($post->image);
        }
        $post->delete();
        return redirect()->back()->with('success', 'data berhasil dihapus');
    }
}
