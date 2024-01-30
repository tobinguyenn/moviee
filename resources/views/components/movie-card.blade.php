@props(['width', 'height', 'poster'])

<div class="relative {{ $width }} {{ $height }}">
    <img class="absolute inset-0 w-full h-full" src="{{ $poster }}" alt="Movie poster" />
</div>
