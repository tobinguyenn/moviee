@props(['type' => 'primary', 'class' => '', 'content', 'isSubmit' => false])

@php
    $baseClass = 'inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 disabled:pointer-events-none disabled:opacity-50 shadow h-9 px-4 py-2 focus-visible:ring-ring';

    switch ($type) {
        case 'secondary':
            $typeClass = 'bg-secondary text-secondary-foreground hover:bg-secondary/80';
            break;
        case 'danger':
            $typeClass = 'bg-danger text-danger-foreground hover:bg-danger/80';
            break;
        case 'icon':
            $baseClass = 'inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 border border-input bg-background shadow-sm hover:bg-secondary hover:text-secondary-foreground h-9 w-9';
            $typeClass = '';
            break;
        default:
            $typeClass = 'bg-primary text-primary-foreground hover:bg-primary/90';
            break;
    }
@endphp

<button type="{{ $isSubmit ? 'submit' : 'button' }}" class="{{ $baseClass }} {{ $class }} {{ $typeClass }}">
    {{ $content ?? $slot }}
</button>
