@props(['class' => '', 'color' => '#fff'])

<div style="background-color: {{ $color }}" {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</div>
