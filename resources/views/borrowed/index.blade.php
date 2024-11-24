<!DOCTYPE html>
<html>
<head>
    <title>Borrowed Books</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .success {
            color: green;
        }
    </style>
</head>
<body>
    <h1>Borrowed Books</h1>

    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Book Title</th>
                <th>Borrower</th>
                <th>Borrowed Date</th>
                <th>Return Date</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($borrowedBooks as $borrowedBook)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $borrowedBook->book->title }}</td>
                    <td>{{ $borrowedBook->member->name }}</td>
                    <td>{{ $borrowedBook->borrowed_date }}</td>
                    <td>{{ $borrowedBook->return_date ?? 'Not returned yet' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align: center;">No borrowed books found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('dashboard') }}">Back to Dashboard</a>
</body>
</html>
