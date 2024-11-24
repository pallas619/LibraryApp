<!DOCTYPE html>
<html>
<head>
    <title>Edit Member</title>
</head>
<body>
    <h1>Edit Member</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: red;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('members.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $member->name }}" required>
        <br><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ $member->email }}" required>
        <br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
