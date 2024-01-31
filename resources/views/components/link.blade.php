@props(['classes' => '', 'url', 'label'])

<a class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 text-primary underline-offset-4 hover:underline {{ $classes }}"
    href="{{ $url }}">{{ $label }}</a>
