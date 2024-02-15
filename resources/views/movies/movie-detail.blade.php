<div class="w-2/3 m-auto pt-8">
    <x-banner />
    <div class="mt-20">
        <p class="font-bold text-3xl">{{ $movie->title }}</p>
        <hr class="h-[2px] my-4 bg-primary">
        <div class="flex items-start m-auto">
            <div class="w-60 min-w-60 h-80 mr-5">
                <img class="w-full h-full" src="{{ $movie->poster }}" alt="{{ __('Movie poster') }}">
            </div>
            <div class="">
                <p><span class="font-bold">Director:</span> {{ $movie->director }}</p>
                <p><span class="font-bold">Actors:</span> {{ $movie->casts }}</p>
                <p><span class="font-bold">Genre:</span> {{ $movie->genre }}</p>
                <p><span class="font-bold">Release date:</span> {{ $movie->release_date->format('d/m/Y') }}</p>
                <p><span class="font-bold">Duration:</span> {{ $movie->duration_label }}</p>
                <p class="font-bold">Rated: {{ $movie->rated->label }}</p>
                <x-rated-card class="w-24 mt-3 text-xl" :color="$movie->rated->color">
                    {{ $movie->rated->code }}
                </x-rated-card>
            </div>
        </div>
        <div class="mt-5">
            <p>{{ $movie->description }}</p>
        </div>
        <div class="mt-5 flex justify-center pb-3">
            <iframe width="1280" height="720" src="{{ $movie->trailer_link }}" title="YouTube video player"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
    </div>
</div>
