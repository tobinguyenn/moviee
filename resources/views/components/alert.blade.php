@props(['type' => 'primary', 'content'])

@php
    $class = 'relative w-fit rounded-md border px-4 py-2 flex items-center text-lg';
    $icon = 'circle-exclamation';

    switch ($type) {
        case 'danger':
            $class .= ' border-danger bg-danger text-danger-foreground';
            $icon = 'triangle-exclamation';
            break;
        default:
            $class .= ' border-primary bg-primary text-primary-foreground';
            break;
    }
@endphp

<div role="alert" {{ $attributes->merge(['class' => $class]) }}>
    <x-icon class="mr-3" name="{{ $icon }}" />
    <div class="leading-relaxed">
        {{ $content ?? '' }}
    </div>
</div>
