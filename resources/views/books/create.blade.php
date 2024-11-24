<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
</head>
<body>
    <h1>Add Book</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title" required>
        <br>
        <label for="author">Author</label>
        <input type="text" name="author" id="author" required>
        <br>
        <label for="publication_year">Publication Year</label>
        <input type="number" name="publication_year" id="publication_year" required>
        <br>
        <label for="categories">Categories</label>
        <select name="categories[]" id="categories" multiple>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
