<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hello
<p>{{ $location }}</p>
<form action="{{ route('form',['page => 5']) }}" method="post">
    <input type="text" name="location">
    <button type="submit">submit</button>
    <a href="{{ route('user')}}">Go to profile</a>
</body>
</html>