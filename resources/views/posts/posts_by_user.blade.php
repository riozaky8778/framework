

<!DOCTYPE html>
<html>
<head>
    <title>Posts by User</title>
</head>
<body>

    <h1>Posts by {{ $user->name }}</h1>

    @foreach($posts as $post)
        <p>{{ $post->title }}</p>
        <p>{{ $post->body }}</p>
        <p>{{ $post->updated_at }}</p>
    @endforeach

</body>
</html>
