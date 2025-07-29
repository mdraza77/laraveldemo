<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tea Home Page</title>
</head>

<body>
    <h1>Teas</h1>
    <ul>
        @foreach ($teas as $tea)
        <li>
            <a href="/teas/{{ $tea['id'] }}">{{ $tea['name'] }}</a>
        </li>
        @endforeach
    </ul>
    <a href="/">Back to Home</a>
</body>

</html>