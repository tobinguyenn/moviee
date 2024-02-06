<div>
    Homepage
    @if ($movies->isNotEmpty())
        <div class="flex space-x-5 justify-center">
            @foreach ($movies as $movie)
                <div wire:key="{{ $movie->id }}">
                    <x-movie-card width="w-60" height="h-80" :movie="$movie" :rated="$movie->rated" />
                </div>
            @endforeach
        </div>
    @endif
</div>
