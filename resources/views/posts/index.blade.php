<!DOCTYPE html>
<html>
<head>
    <title>Data Post</title>
</head>
<body>
    <h1>Data Post</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Content</th>
                <th>Comment</th>
            </tr>
        </thead>
        <tbody>
            @foreach($post as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->title }}</td>
                    <td>{{ $p->body }}</td>
                    <td>{{ $p->comments }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
