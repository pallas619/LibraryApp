<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Specify the table if it's not plural form
    protected $table = 'categories';

    // Allow mass assignment for these fields
    protected $fillable = ['name'];

    /**
     * Define the many-to-many relationship with Book.
     */
    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_category', 'category_id', 'book_id');
    }
}
