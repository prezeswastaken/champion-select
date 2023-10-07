<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Champion select</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="bg-black min-h-screen h-full">
        {{ $slot }}
    </div>
</body>

</html>
