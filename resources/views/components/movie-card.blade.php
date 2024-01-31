@props(['width', 'height', 'poster', 'rated'])

<div class="relative {{ $width }} {{ $height }}" x-data="{ hover: false }" x-on:mouseover="hover = true"
    x-on:mouseout="hover = false">
    {{-- Rated card --}}
    <x-rated-card
        class="flex justify-center items-center min-w-10 px-2 py-1 z-10 absolute top-2 left-2 font-bold rounded text-white uppercase"
        :color="$rated->color">{{ $rated->code }}</x-rated-card>

    {{-- Play button --}}
    <div x-show="hover"
        class="flex items-center w-16 h-16 absolute z-10 m-auto inset-0 text-4xl text-black cursor-pointer bg-white rounded-full pl-5">
        <x-icon name="play" />
    </div>

    {{-- Detail button --}}

    <img class="absolute inset-0 w-full h-full" src="{{ $poster }}" alt="Movie poster" />
</div>
