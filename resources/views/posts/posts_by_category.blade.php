
<!DOCTYPE html>
<html>
<head>
    <title>Posts by Category: {{ $category->name }}</title>
</head>
<body>

    <h1>Posts by Category: {{ $category->name }}</h1>

    @foreach($posts as $post)
        <p>{{ $post->title }}</p>
    @endforeach

</body>
</html>
