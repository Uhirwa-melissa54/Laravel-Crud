<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
</head>
<body>
    <h1>Students</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('students.create') }}">Create New Student</a>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Name</th>
                <th>content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->content }}</td>
                    <td>
                        <a href="{{ route('students.show', $student->id) }}">Show</a> |
                        <a href="{{ route('students.edit', $student->id) }}">Edit</a> |
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Delete this student?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
