<div class="fixed bg-black w-screen min-h-screen text-white font-mono flex flex-col items-center justify-center ">
    <div class="text-4xl">{{ $questionString }}</div>
    <div class="rounded-xl p-5 h-64 w-1/3 flex-col justify-center">
        @if ($finished)
            <p class="flex justify-center mb-10 capitalize">{{ $description }}</p>
            <img src="{{ $linkToImage }}" class="mb-5 border border-orange-100 rounded-3xl shadow-md shadow-orange-500" />
            <a href="/main" class="hover:text-orange-400 capitalize mt-5 self-center w-full duration-300">try again</a>
        @endif
        <div class="grid grid-cols-2 h-full w-full duration-300 ">

            @if (!$finished)
                <button wire:click="handleClick('{{ $answerA }}')"
                    class="text-2xl text-center text-white flex justify-center items-center hover:text-orange-400 duration-300">{{ $answerA }}</button>
                <button wire:click="handleClick('{{ $answerB }}')"
                    class="text-2xl text-center text-white flex justify-center items-center hover:text-orange-400 duration-300">{{ $answerB }}</button>
            @endif
        </div>
        <div>
        </div>
    </div>
