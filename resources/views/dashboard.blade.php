<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Library Management by Gathfan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .dashboard-container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }
        .card {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 200px;
            text-align: center;
        }
        .card h2 {
            margin: 0;
            font-size: 2em;
            color: #333;
        }
        .card p {
            margin: 10px 0 0;
            color: #555;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            margin-top: 20px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Dashboard Management by Gathfan</h1>
    <div class="dashboard-container">
        <div class="card">
            <h2>{{ $categoriesCount }}</h2>
            <p>Categories</p>
            <a href="{{ route('categories.index') }}">View Categories</a>
        </div>
        <div class="card">
            <h2>{{ $booksCount }}</h2>
            <p>Books</p>
            <a href="{{ route('books.index') }}">View Books</a>
        </div>
        <div class="card">
            <h2>{{ $membersCount }}</h2>
            <p>Members</p>
            <a href="{{ route('members.index') }}">View Members</a>
        </div>
        <div class="card">
            <h2>Borrow</h2>
            <p>Borrow a Book</p>
            <a href="{{ route('borrow.dashboard') }}">Manage Borrowing</a>
        </div>
    </div>

    <h2>Borrowed Books</h2>
    <a href="{{ route('borrowed.index') }}" class="btn">View Borrowed Books</a>
</body>
</html>
