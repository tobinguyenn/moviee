@props(['color' => '#fff'])

<div style="background-color: {{ $color }}"
    {{ $attributes->merge(['class' => 'flex justify-center items-center min-w-10 px-2 py-1 z-10 font-bold rounded text-white uppercase']) }}>
    {{ $slot }}
</div>
