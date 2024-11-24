<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Book;
use App\Models\BorrowedBook;
use Illuminate\Http\Request;

class BorrowedBookController extends Controller
{
    
    public function index()
    {
        // Ambil data peminjaman buku dengan relasi buku dan anggota
        $borrowedBooks = BorrowedBook::with('book', 'member')->get();

        return view('borrowed.index', compact('borrowedBooks'));
    }
    
    
    public function borrowDashboard()
    {
        $members = Member::all();
        $books = Book::whereDoesntHave('borrowedBy')->get();// Buku yang belum dipinjam
        return view('borrow.dashboard', compact('members', 'books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'member_id' => 'required|exists:members,id',
            'book_id' => 'required|exists:books,id',
            'borrowed_date' => 'required|date',
        ]);

        BorrowedBook::create($request->all());

        return redirect()->route('borrow.dashboard')->with('success', 'Book borrowed successfully.');
    }
}
