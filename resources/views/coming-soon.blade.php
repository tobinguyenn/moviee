<div>
    Coming soon
    @if ($movies->isNotEmpty())
        <div class="flex space-x-5 justify-center">
            @foreach ($movies as $movie)
                <div wire:key="{{ $movie->id }}">
                    <x-movie-card width="w-60" height="h-80" :poster="$movie->poster" :rated="$movie->rated" />
                </div>
            @endforeach
        </div>
    @endif
</div>
