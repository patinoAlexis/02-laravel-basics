@props(['title' => 'Example Title'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    @vite('resources/css/app.css')
    <style>
        .max-w-400 {
            max-width: 400px;
            margin: auto;
        }

        .card-style {
            background-color: #e3e3e3; padding: 1rem; text-align: center;"
        }
    </style>
</head>
<body>
<nav class="block">
    <a href="/"> Home</a>
    <a href="/contact">Contact us</a>
    <a href="/about">About page</a>

</nav>
{{ $slot }}
</body>
</html>
