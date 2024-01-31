@props(['name' => '', 'type' => 'solid'])

@php
    if ($type != Icon::class) {
        $type == Icon::SOLID;
    }
    $class = "fa-$type fa-$name";
@endphp

<i class="{{ $class }}"></i>
