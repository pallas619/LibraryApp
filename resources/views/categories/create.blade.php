<!DOCTYPE html>
<html>
<head>
    <title>Add Category</title>
</head>
<body>
    <h1>Add Category</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label for="name">Category Name</label>
        <input type="text" name="name" id="name" required>
        <button type="submit">Save</button>
    </form>
</body>
</html>
