<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
</head>
<body>
    <h1>Edit Book</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: red;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $book->title }}" required>
        <br><br>
        <label for="author">Author</label>
        <input type="text" name="author" id="author" value="{{ $book->author }}" required>
        <br><br>
        <label for="publication_year">Publication Year</label>
        <input type="number" name="publication_year" id="publication_year" value="{{ $book->publication_year }}" required>
        <br><br>
        <label for="categories">Categories</label>
        <select name="categories[]" id="categories" multiple>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $book->categories->contains($category->id) ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        <br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
