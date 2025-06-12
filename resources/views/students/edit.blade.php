<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name', $student->name) }}"><br><br>

        <label>content:</label>
   <input type="text" name="content" value="{{ old('content', $student->content) }}"><br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('students.index') }}">Back to List</a>
</body>
</html>
