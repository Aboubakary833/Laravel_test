<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post notification mail</title>
</head>
<body>
    <h1>Hi {{$user}}!</h1>
    <p>New post has been publish on: <a href="{{ $website }}">{{ $website }}</a>.</p>
    <h3>Title: {{ $title }}</h3>
    <p>{{ $description }}</p>
</body>
</html>