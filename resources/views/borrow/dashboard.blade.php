<!DOCTYPE html>
<html>
<head>
    <title>Borrow Dashboard</title>
</head>
<body>
    <h1>Borrow a Book</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('borrow.book') }}" method="POST">
        @csrf
        <label for="member">Select Member:</label>
        <select name="member_id" id="member" required>
            @foreach ($members as $member)
                <option value="{{ $member->id }}">{{ $member->name }}</option>
            @endforeach
        </select>
        <br><br>
        <label for="book">Select Book:</label>
        <select name="book_id" id="book" required>
            @foreach ($books as $book)
                <option value="{{ $book->id }}">{{ $book->title }}</option>
            @endforeach
        </select>
        <br><br>
        <label for="borrowed_date">Borrowed Date:</label>
        <input type="date" name="borrowed_date" id="borrowed_date" required>
        <br><br>
        <button type="submit">Borrow Book</button>
    </form>
</body>
</html>
