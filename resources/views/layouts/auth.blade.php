@extends('layouts.base')
@section('content')
    <div class="container relative h-screen items-center justify-center grid max-w-none grid-cols-2 px-0">
        <div class="relative h-full flex-col bg-muted p-10 text-white flex">
            <div class="absolute inset-0 bg-zinc-900"></div>
            <div class="relative z-20 flex items-center">
                <x-logo classes="w-40" />
            </div>
            <div class="relative z-20 mt-auto">
                <blockquote class="space-y-2">
                    <p class="text-lg">"{{ __('app.default_title') }}"</p>
                </blockquote>
            </div>
        </div>
        {{ $slot }}
    </div>
@endsection
