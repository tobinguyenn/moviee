<div>
    Coming soon
    @if ($movies->isNotEmpty())
        <div class="flex space-x-5 justify-center">
            @foreach ($movies as $movie)
                <div wire:key="{{ $movie->id }}">
                    <x-movie-card width="w-60" height="h-80" :poster="'https://www.cgv.vn/media/catalog/product/cache/1/thumbnail/240x388/c88460ec71d04fa96e628a21494d2fd3/7/0/700x1000.png'" />
                </div>
            @endforeach
        </div>
    @endif
</div>
