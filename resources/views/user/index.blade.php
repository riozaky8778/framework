

<html>
<head>
    <title>Data User</title>
</head>
<body>
    <h1>Data User</h1>

    <ul>
        @foreach($datauser as $user)
            <li>Id: {{ $user->id }}</li>
            <li>Nama: {{ $user->name }}</li>
            <li>Email: {{ $user->email }}</li>
        @endforeach
    </ul>
</body>
</html>
