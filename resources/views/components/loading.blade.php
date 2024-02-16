@props(['type' => 'primary'])

@php
    $icon = 'spinner.svg';
    if ($type == 'secondary') {
        $icon = 'spinner-white.svg';
    }
@endphp

<div wire:loading {{ $attributes->merge(['class' => 'w-4 h-4']) }}>
    <img src="{{ Vite::image($icon) }}" alt="Loading Icon" class="animate-spin w-full h-full" />
</div>
