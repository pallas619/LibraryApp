<?php


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowedBookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Route untuk halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Route untuk Categories
Route::resource('categories', CategoryController::class);

// Route untuk Books
Route::resource('books', BookController::class);

// Route untuk Members
Route::resource('members', MemberController::class);

// Custom Route untuk menampilkan buku berdasarkan kategori
Route::get('categories/{category}/books', [CategoryController::class, 'showBooks'])->name('categories.books');

// Route::get('categories/{category}/books', [CategoryController::class, 'showBooks'])->name('categories.books');

Route::get('members/{member}/borrowed-books', [MemberController::class, 'showBorrowedBooks'])->name('members.borrowed_books');

// Dashboard route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Borrowing management dashboard
Route::get('/borrow-dashboard', [BorrowedBookController::class, 'borrowDashboard'])->name('borrow.dashboard');

// Store borrowed books
Route::post('/borrow-book', [BorrowedBookController::class, 'store'])->name('borrow.book');

Route::get('/borrowed-books', [BorrowedBookController::class, 'index'])->name('borrowed.index');