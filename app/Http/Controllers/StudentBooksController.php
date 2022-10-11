<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookUser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use App\Events\BorrowedBook;
use Illuminate\Support\Facades\Cache;

class StudentBooksController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('student.books', ['books' => $books]);

    }

    public function show(Book $book)
    {
        $bookBorrowment = BookUser::where('user_id', Auth::id())
                        ->where('book_id', $book->id)
                        ->latest('created_at')
                        ->first();
        // dd($bookBorrowment);
        return view('student.detail-books', ['book' => $book, 'bookBorrowment' => $bookBorrowment]);
    }

    public function myBooks()
    {
        $myBorrowments = BookUser::where('user_id', Auth::id())->latest('created_at')->get();
        return view('student.my-books', ['myBorrowments' => $myBorrowments]);
    }

    public function create(Book $book)
    {
        return view('student.borrow-books', ['book' => $book]);
    }

    public function store(Book $book, Request $request)
    {
        // dump($book);
        // dd($request->all());
        BookUser::create([
            'user_id' => Auth::id(),
            'book_id' => $book->id,
            'borrowed_date' => Carbon::now()->format('Y-m-d'),
            'due_date' => $request->due_date,
            'status' => 'not yet approved'
        ]);

        Event::dispatch(new BorrowedBook());
        
        return redirect()->route('student.my_books')->with('Success', 'Borrowment has been sent, waiting for approval.');
    }
    
    public function returnBook(Book $book)
    {
        // dd($book);
        BookUser::where('user_id', Auth::id())
                ->where('book_id', $book->id)
                ->update([
                    'return_date' => Carbon::now()->format('Y-m-d'),
                    'status' => 'returned'
                ]);
        $bookStock = $book->stock;
        $bookStock += 1;
        $book->update([
            'stock' => $bookStock
        ]);
        return redirect()->route('student.my_books')->with('Success', 'Book has been returned!');
        
    }
}
