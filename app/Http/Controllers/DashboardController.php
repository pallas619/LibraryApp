<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Book;
use App\Models\BorrowedBook;
use App\Models\Member;

class DashboardController extends Controller
{
    public function index()
    {
        $categoriesCount = Category::count();
        $booksCount = Book::count();
        $membersCount = Member::count();

        // Ambil data peminjaman buku terbaru
        $recentBorrowedBooks = BorrowedBook::with('book', 'member')->latest()->take(5)->get();

        return view('dashboard', compact('categoriesCount', 'booksCount', 'membersCount'));
    }
}
