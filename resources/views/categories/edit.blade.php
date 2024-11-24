<!DOCTYPE html>
<html>
<head>
    <title>Edit Category</title>
</head>
<body>
    <h1>Edit Category</h1>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Category Name</label>
        <input type="text" name="name" id="name" value="{{ $category->name }}" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
