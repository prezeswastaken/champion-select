<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Champion select</title>
    @vite('resources/css/app.css')
</head>

<body>
<div class="bg-black w-screen min-h-screen text-white">
    {{ $slot }}
</div>
</body>

</html>
