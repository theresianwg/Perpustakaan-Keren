<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminBooksController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('admin.index-book', ['books' => $books]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.add-book', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'published_date' => 'required',
            'stock' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,bmp,png',
        ]);
        $request->image->store('images', 'public');
        Book::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'author' => $request->author,
            'publisher' => $request->publisher,
            'published_date' => $request->published_date,
            'stock' => $request->stock,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'image' => $request->image->hashName()
        ]);
        return redirect()->route('book.index')->with('Success', 'Book has been saved!');
    }
    
    public function show(Book $book)
    {
        $categories = Category::all();
        return view('admin.edit-book', ['book' => $book, 'categories' => $categories]);
    }

    public function destroy(Book $book)
    {
        // dd($book);
        $book->delete();
        return redirect()->route('book.index')->with('Danger', 'Book has been deleted!');
    }
    
    public function update(Book $book, Request $request)
    {
        // dump($book);
        // dd($request->all());

        // dump($request->all());
        // dd($request->image);
        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'published_date' => 'required',
            'stock' => 'required',
            'category_id' => 'required',
            'description' => 'required',
        ]);
        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'author' => $request->author,
            'publisher' => $request->publisher,
            'published_date' => $request->published_date,
            'stock' => $request->stock,
            'category_id' => $request->category_id,
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

        $book->update($data);
        return redirect()->route('book.index')->with('Success', 'Book has been updated!');
    }
}
