
<!DOCTYPE html>
<html>
<head>
    <title>{{ $post->title }}</title>
</head>
<body>

    <h1><b>Judul</b> :{{ $post->title }}</h1>

    <p><b>Isi Post</b> {{ $post->body }}</p>
    <p><b>Author</b> {{ $post->author->name }}</p>
    <p><b>Di Publish</b> {{ $post->published_at }}</p>
    <p><b>Comment</b> {{ $post->comments }}</p>

</body>
</html>
