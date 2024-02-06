<div class="w-2/3 m-auto pt-8">
    <x-banner />
    <div class="mt-20">
        <p class="font-bold text-3xl">{{ $movie->title }}</p>
        <hr class="h-[2px] my-4 bg-primary">
        <div class="flex items-start m-auto">
            <div class="w-60 h-80 mr-5 overflow-hidden">
                <img class="w-full h-full" src="{{ $movie->poster }}" alt="{{ __('Movie poster') }}">
            </div>
            <div>
                <p><span class="font-bold">Director:</span> {{ $movie->director }}</p>
                <p><span class="font-bold">Actors:</span> {{ $movie->casts }}</p>
                <p><span class="font-bold">Genre:</span> {{ $movie->genre }}</p>
                <p><span class="font-bold">Release date:</span> {{ $movie->release_date->format('d/m/Y') }}</p>
                <p><span class="font-bold">Duration:</span> {{ $movie->duration_label }}</p>
                <p><span class="font-bold">Rated:</span> {{ $movie->duration_label }}</p>
            </div>
        </div>
    </div>
</div>
