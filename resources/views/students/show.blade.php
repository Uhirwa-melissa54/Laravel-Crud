<!-- resources/views/students/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>View Student</title>
</head>
<body>
    <h1>Student Details</h1>

    <p><strong>Name:</strong> {{ $student->name }}</p>
    <p><strong>content:</strong> {{ $student->content }}</p>

    <a href="{{ route('students.index') }}">Back to List</a>
</body>
</html>
