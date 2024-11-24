<!DOCTYPE html>
<html>
<head>
    <title>Books in Category</title>
</head>
<body>
    <h1>Books in Category: {{ $category->name }}</h1>
    <ul>
        @foreach ($books as $book)
            <li>{{ $book->title }} by {{ $book->author }}</li>
        @endforeach
    </ul>
    <a href="{{ route('categories.index') }}">Back to Categories</a>
</body>
</html>
