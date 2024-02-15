@props(['name' => '', 'type' => 'solid'])

@php
    if ($type != Icon::class) {
        $type == Icon::SOLID;
    }
@endphp

<i {{ $attributes->merge(['class' => "fa-$type fa-$name"]) }} {{ $attributes->whereStartsWith('wire:') }}></i>
