
<!DOCTYPE html>
<html>
<head>
    <title>Posts by Date</title>
</head>
<body>

    <h1>Posts created on {{ $date }}</h1>

    @foreach($posts as $post)
        <p>{{ $post->title }}</p>
        <p>{{ $post->body }}</p>
        <p>{{ $post->author->name }}</p>
        <p>{{ $post->created_at }}</p>
    @endforeach

</body>
</html>
