@props(['width', 'height', 'movie', 'rated'])

<div class="relative {{ $width }} {{ $height }} group/card overflow-hidden">
    {{-- Rated card --}}
    <x-rated-card
        class="flex justify-center items-center min-w-10 px-2 py-1 z-10 absolute top-2 left-2 font-bold rounded text-white uppercase"
        :color="$rated->color">{{ $rated->code }}</x-rated-card>

    {{-- Play button --}}
    <div
        class="flex items-center w-16 h-16 absolute z-10 m-auto inset-0 text-4xl text-black cursor-pointer bg-white rounded-full pl-5 transition-opaticy ease-out duration-75 opacity-0 group-hover/card:opacity-100 group-hover/card:duration-100 group-hover/card:ease-in">
        <x-icon name="play" />
    </div>

    {{-- Detail button --}}
    <div
        class="absolute z-10 w-full px-3 py-2 bg-primary/85 bottom-0 max-h-28 translate-y-full transition-transform ease-out duration-100 group-hover/card:translate-y-0 group-hover/card:duration-200 group-hover/card:ease-in">
        <p title="{{ $movie->title }}"
            class="text-primary-foreground mb-3 whitespace-nowrap overflow-hidden text-ellipsis cursor-default">
            {{ $movie->title }}</p>
        <div class="flex justify-evenly">
            <a title="{{ __('Title') }}" target="_blank" href="{{ route('movies.show', ['movie' => $movie]) }}">
                <x-button type="icon" class="!rounded-full">
                    <x-icon name="info" />
                </x-button>
            </a>
            <a title="{{ __('Buy ticket') }}" target="_blank" href="{{ route('movies.show', ['movie' => $movie]) }}">
                <x-button type="icon" class="!rounded-full">
                    <x-icon name="ticket" />
                </x-button>
            </a>
        </div>
    </div>

    <img class="absolute inset-0 w-full h-full" src="{{ $movie->poster }}" alt="Movie poster" />
</div>
