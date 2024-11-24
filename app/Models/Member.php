<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'members';

    protected $fillable = ['name', 'email'];

    /**
     * Define the one-to-many relationship with Book (borrowed_books).
     */
    public function borrowedBooks()
    {
        return $this->hasMany(BorrowedBook::class, 'member_id');
    }
    public function borrowedBy()
    {
    return $this->belongsTo(Member::class, 'member_id');
    }   
}
