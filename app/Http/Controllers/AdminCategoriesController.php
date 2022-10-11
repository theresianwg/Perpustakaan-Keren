<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminCategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.index-category', ['categories' => $categories]);
    }

    public function create()
    {
        return view('admin.add-category');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,bmp,png',
        ]);
        $request->image->store('images', 'public');
        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'image' => $request->image->hashName()
        ]);
        return redirect()->route('category.index')->with('Success', 'Category has been saved!');
    }

    public function show(Category $category)
    {
        return view('admin.edit-category', ['category' => $category]);
    }

    public function update(Category $category, Request $request)
    {
        // dump($category);
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
        ];
        if($request->hasFile('image')){
            $request->validate([
                'image' => 'mimes:jpeg,bmp,png',
            ]);
            $request->image->store('images', 'public');
            $data['image'] = $request->image->hashName();
        }else{
            $data['image'] = $request->old_image;
        }
        $category->update($data);
        return redirect()->route('category.index')->with('Success', 'Category has been updated!');
    }
}
