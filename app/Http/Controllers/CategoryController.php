<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // index
    public function index()
    {
        $categories = Category::all();
        return view('admin.pages.categories.index', ['categories' => $categories]);
    }


    // store
    public function store(Request $request)
    {
        // Validate
        $request->validate([
            'name' => 'required|unique:categories|max:255'
        ]);

        // Store
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        // Return  response
        return back()->with('success', 'Category Saved');
    }

    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return back()->with('success', 'Category Deleted');
    }


}
