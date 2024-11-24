<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowedBooksTable extends Migration
{
    public function up()
    {
        Schema::create('borrowed_books', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('book_id')->constrained('books')->onDelete('cascade'); // Foreign key to books
            $table->foreignId('member_id')->constrained('members')->onDelete('cascade'); // Foreign key to members
            $table->date('borrowed_date'); // Borrow date
            $table->date('return_date')->nullable(); // Return date (nullable)
            $table->timestamps(); // Created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('borrowed_books');
    }
}
