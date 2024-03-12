<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <title>Home</title>
</head>
<body>
    <header>
        <h1>
            Hello World
        </h1>
    </header>
    <main>
        <ul>
            @foreach ($data as $el)
                <li>
                    {{ $el['word']}}
                </li>
            @endforeach
        </ul>
    </main>
</body>
</html>