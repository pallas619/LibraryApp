<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = ['title', 'author', 'publication_year'];

    /**
     * Define the many-to-many relationship with Category.
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'book_category', 'book_id', 'category_id');
    }

    /**
     * Define the one-to-many relationship with Member (borrowed_books).
     */
    public function borrowedBy()
    {
        return $this->hasOne(BorrowedBook::class, 'book_id');
    }
    public function borrowedBooks()
    {
    return $this->hasMany(BorrowedBook::class, 'member_id');
    }

}
