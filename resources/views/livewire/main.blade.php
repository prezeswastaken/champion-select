<div class="bg-black w-screen min-h-screen text-white font-mono flex flex-col items-center justify-center gap-5">
    <div class="text-3xl">{{ $questionString }}</div>
    <div class="rounded-xl p-5 h-64 w-1/3 flex-col justify-center">
        <div class="grid grid-cols-2 h-full w-full duration-300 ">

@foreach ($answers as $answer)
    <button wire:click="handleClick('{{ $answer->getAnswerString() }}')"
            class="text-center text-white flex justify-center items-center hover:text-orange-400 duration-300">{{ $answer->getAnswerString() }}</button>
@endforeach

            <form wire:submit="submitAnswer">
            </form>

        </div>
        <div>
        </div>
    </div>
