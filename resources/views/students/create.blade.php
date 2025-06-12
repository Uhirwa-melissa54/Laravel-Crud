<!-- resources/views/students/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Create Student</title>
</head>
<body>
    <h1>Create New Student</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name') }}"><br><br>

        <label>content</label>
        <input type="text" name="content" value="{{ old('content') }}"><br><br>

        <button type="submit">Save</button>
    </form>

    <br>
    <a href="{{ route('students.index') }}">Back to List</a>
</body>
</html>
