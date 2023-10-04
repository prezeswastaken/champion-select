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
        <div class="text-3xl">{{ $questionString }}</div>
        <div class="rounded-xl p-5 h-64 w-1/3 flex-col justify-center">
            <div class="grid grid-cols-2 h-full w-full duration-300 ">

                @foreach ($answers as $answer)
                    <button
                        class="text-center text-white flex justify-center items-center hover:text-orange-400 duration-300">{{ $answer->getAnswerString() }}</button>
                @endforeach

                <form action="/show" method="POST">
                    @csrf <!-- Add CSRF token if you're using Laravel -->

                    <select name="selectedAnswer" onchange="this.form.submit()">
                        <option value="" disabled selected>Select an answer</option>
                        @foreach ($answers as $answer)
                            <option value="{{ $answer->getAnswerString() }}">{{ $answer->getAnswerString() }}</option>
                        @endforeach
                    </select>
                </form>



            </div>
        </div>

</body>

</html>
