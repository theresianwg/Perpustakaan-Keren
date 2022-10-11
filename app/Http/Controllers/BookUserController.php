<?php

namespace App\Http\Controllers;

use App\Models\BookUser;
use Illuminate\Http\Request;

class BookUserController extends Controller
{
    public function index()
    {
        $bookBorrowments = BookUser::all()->sortByDesc('id');
        return view('admin.borrowed-book', ['bookBorrowments' => $bookBorrowments]);
    }

    public function rejectBorrowment(BookUser $bookBorrowment)
    {
        // dd($bookBorrowment);
        $bookBorrowment->update([
            'status' => 'rejected'
        ]);
        return redirect()->route('book.borrowed')->with('Success', 'Borrowment status has been updated to rejected!');
    }

    public function approveBorrowment(BookUser $bookBorrowment)
    {
        // dd($bookBorrowment);
        $bookBorrowment->update([
            'status' => 'approved'
        ]);
        $bookStock = $bookBorrowment->book->stock;
        $bookStock -= 1;
        $bookBorrowment->book->update([
            'stock' => $bookStock
        ]);
        return redirect()->route('book.borrowed')->with('Success', 'Borrowment status has been updated to approved!');
    }
}
