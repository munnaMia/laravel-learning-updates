@props([
    'title' => "idea"
])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
     <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-800 p-7">

    <nav>
        <a href="/">home page</a>
        <a href="/about">about page</a>
        <a href="/contact">contact page</a>
    </nav>

    <main>
        {{ $slot }}
    </main>
</body>

</html>
