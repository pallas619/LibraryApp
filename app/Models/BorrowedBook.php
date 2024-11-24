<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowedBook extends Model
{
    use HasFactory;

    protected $table = 'borrowed_books';

    protected $fillable = ['book_id', 'member_id', 'borrowed_date', 'return_date'];

    /**
     * Define the inverse one-to-many relationship with Member.
     */
    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id');
    }

    /**
     * Define the inverse one-to-many relationship with Book.
     */
    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }
}
