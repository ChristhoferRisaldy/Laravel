<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
</head>
<body>
    <h2>Students Table</h2>

    <!-- Logout Button -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->age }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>