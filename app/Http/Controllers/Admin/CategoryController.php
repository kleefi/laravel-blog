<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(10);
        return view('admin.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.form-category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            ["title" => "required"]
        );
        try {
            Category::create($validated);
            return redirect()->back()->with('success', 'berhasil menambah kategori baru');
        } catch (Exception $e) {
            return redirect()->back()->with('success', 'gagal menambah kategori baru');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('admin.form-category', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate(
            ["title" => "required"]
        );
        try {
            $category = Category::findOrFail($id);
            $category->update($validated);
            return redirect()->back()->with('success', 'berhasil mengupdate kategori');
        } catch (Exception $e) {
            return redirect()->back()->with('success', 'gagal mengupdate kategori ');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->back()->with('success', 'kategori berhasil dihapus');
    }
}
