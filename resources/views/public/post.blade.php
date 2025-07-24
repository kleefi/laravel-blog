<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$post->title}}</title>
</head>

<body>
    <h1>{{$post->title}}</h1>
    <p>
        {{ $post->body }}
    </p>
    <img width="10%" src="{{ asset('storage/' . $post->image) }}" alt="Gambar Post"><br>

    <a href="/">Back</a>
</body>

</html>