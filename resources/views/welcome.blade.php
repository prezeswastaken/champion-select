<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Champion select</title>
    @vite('resources/css/app.css')

</head>

<body>
    <div class="bg-black text-white w-screen min-h-screen font-mono gap-5  flex flex-col pt-20 items-center">
        <p class="text-orange-400 text-3xl">Welcome to champion select!</p>
        <a href="main"
            class="text-7xl uppercase m-10  border border-transparent p-5 rounded-xl border-transparent hover:border-orange-400 hover:text-orange-400 duration-300 hover:cursor-grab">start</a>
        <div class="flex border border-transparent rounded-xl px-5 py-2 w-1/3">
            <p>So, you want to start your journey with <a href="https://www.leagueoflegends.com/" target="_blank"
                    class="text-orange-600 hover:text-orange-400 duration-300">League of legends</a>, but you are not
                sure which champion to pick? Well, there is so many of them! I know the feeling, i had the same back
                when i started my adventure with League. <br>Fortunately, you managed to find this site. Well done! Now
                it's only matter of few minutes, before you find your dream, best suited for you League of legends
                champion. So... what are you waiting for? Click START button, and let your story begin! </p>
        </div>
    </div>
</body>

</html>
