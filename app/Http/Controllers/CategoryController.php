<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->paginate(10);

        return view('categories.index')->with('categories', $categories);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        try {
            Category::create($request->all());
        } catch (\Exception $e) {
            dd($e);
        }

        return redirect()->route('categories.index')->with('success','Category created successfully.');
    }

    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        try {
            $category->update($request->all());
        } catch (\Exception $e) {
            dd($e);
        }

        return redirect()->route('categories.index')->with('success','Category updated successfully');
    }

    public function destroy(Category $category)
    {
        try {
            $category->delete();
        } catch (\Exception $e) {
            dd($e);
        }

        return redirect()->route('categories.index')->with('success','Category deleted successfully');
    }
}
