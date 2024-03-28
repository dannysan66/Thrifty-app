<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    // index
    public function index()
    {
        $colors = Color::all();
        return view('admin.pages.colors.index', ['colors' => $colors]);
    }


    // store
    public function store(Request $request)
    {
        // Validate
        $request->validate([
            'name' => 'required|unique:colors|max:255',
            'code' => 'required|max:255'
        ]);

        // Store
        $color = new Color();
        $color->name = $request->name;
        $color->code = $request->code;
        $color->save();

        // Return  response
        return back()->with('success', 'Color Saved');
    }

    public function destroy($id)
    {
        Color::findOrFail($id)->delete();
        return back()->with('success', 'Color Deleted');
    }

}
