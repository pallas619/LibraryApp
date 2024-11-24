<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookCategoryTable extends Migration
{
    public function up()
    {
        Schema::create('book_category', function (Blueprint $table) {
            $table->foreignId('book_id')->constrained('books')->onDelete('cascade'); // Foreign key to books
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade'); // Foreign key to categories
            $table->primary(['book_id', 'category_id']); // Composite primary key
        });
    }

    public function down()
    {
        Schema::dropIfExists('book_category');
    }
}
