@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-pink text-foreground text-md font-medium leading-5
focus:outline-none focus:border-pink transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-md text-muted leading-5
hover:text-foreground hover:border-muted focus:outline-none focus:text-foreground focus:border-blue transition
duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
