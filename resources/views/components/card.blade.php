@props(['width' => '380px'])

<div class="rounded-xl border bg-card text-card-foreground shadow w-[{{ $width }}] p-6">
    @isset($header)
        <div class="flex flex-col space-y-1.5">
            {{ $header }}
        </div>
    @endisset
    @isset($body)
        <div class="pt-0 grid gap-4">
            {{ $body }}
        </div>
    @endisset
    @isset($footer)
        <div class="flex items-center pt-0">
            {{ $footer }}
        </div>
    @endisset
</div>
