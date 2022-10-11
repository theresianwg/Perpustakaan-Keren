<?php

use App\Http\Controllers\AdminBooksController;
use App\Http\Controllers\AdminCategoriesController;
use App\Http\Controllers\AdminStudentController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BookUserController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\StudentBooksController;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/test', function () {
    return view('template');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/form/{locale}', [LocalizationController::class, 'index']);

Route::group(['middleware' => 'auth'], function(){
    Route::group(['middleware' => 'isStudent'], function(){
        /* ======== student books ======== */
        Route::get('/student/books', [StudentBooksController::class, 'index'])->name('student.books');
        Route::get('/student/books/{book:slug}', [StudentBooksController::class, 'show'])->name('student.books.show');
        Route::get('/student/my_books', [StudentBooksController::class, 'myBooks'])->name('student.my_books');
        Route::get('/student/borrow/{book:slug}', [StudentBooksController::class, 'create'])->name('student.borrow_books');
        Route::post('/student/borrow/{book:slug}', [StudentBooksController::class, 'store'])->name('student.borrow_books.store');
        Route::post('/student/return/{book:slug}', [StudentBooksController::class, 'returnBook'])->name('student.return_book');
        
    });
    Route::group(['middleware' => 'isAdmin'], function(){
        /* ======== admin books ======== */
        Route::get('/admin/book', [AdminBooksController::class, 'index'])->name('book.index');
        Route::get('/admin/book/add', [AdminBooksController::class, 'create'])->name('book.add');
        Route::post('/admin/book/add', [AdminBooksController::class, 'store'])->name('book.store');
        Route::delete('/admin/book/{book:slug}', [AdminBooksController::class, 'destroy'])->name('book.destroy');
        Route::get('/admin/book/{book:slug}', [AdminBooksController::class, 'show'])->name('book.show');
        Route::put('/admin/book/{book:slug}', [AdminBooksController::class, 'update'])->name('book.update');
        
        /* ======== admin categories ======== */
        Route::get('/admin/category', [AdminCategoriesController::class, 'index'])->name('category.index');
        Route::get('/admin/category/add', [AdminCategoriesController::class, 'create'])->name('category.create');
        Route::post('/admin/category/add', [AdminCategoriesController::class, 'store'])->name('category.store');
        Route::get('/admin/category/{category:slug}', [AdminCategoriesController::class, 'show'])->name('category.show');
        Route::put('/admin/category/{category:slug}', [AdminCategoriesController::class, 'update'])->name('category.update');
        
        /* ======== admin student ======== */
        Route::get('/admin/student', [AdminStudentController::class, 'index'])->name('student.index');
        Route::post('/admin/student/{id}', [AdminStudentController::class, 'approveStudent'])->name('student.approve');
        
        /* ======== register new admin ======== */
        Route::view('/admin/register', 'admin.register-admin')->name('admin.register');
        Route::post('/admin/register', [RegisteredUserController::class, 'registerAdmin'])->name('admin.store');
        
        /* ======== book loan ======== */
        Route::get('/admin/borrowed/book', [BookUserController::class, 'index'])->name('book.borrowed');
        Route::post('/admin/borrowed/reject/{bookBorrowment}', [BookUserController::class, 'rejectBorrowment'])->name('book.rejectBorrowment');
        Route::post('/admin/borrowed/approve/{bookBorrowment}', [BookUserController::class, 'approveBorrowment'])->name('book.approveBorrowment');
    
    });
});



require __DIR__.'/auth.php';