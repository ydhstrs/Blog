<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class DashboardCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('admin.category.index', [
            'contents' => Category::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'max:255',
        ]);
        Category::create($validatedData);

        return redirect('/dashboard/category')->with('success', 'Category Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', [
            'item' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'name' => 'max:255',
        ]);

        Category::where('id', $category->id)->update($validatedData);

        return redirect('/dashboard/category')->with('success', 'Category Has Been Edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
    }

    public function addToVerif(Request $request, $id)
    {
        Category::where('id', $request['id'])->update([
            'is_show' => 1,
        ]);

        return redirect('/dashboard/category')->with('success', 'Category Has Been Edited');
    }

    public function delToVerif(Request $request, $id)
    {
        Category::where('id', $request['id'])->update([
           'is_show' => 0,
        ]);

        return redirect('/dashboard/category')->with('success', 'Category Has Been Edited');
    }
}
