@extends('layouts.base')
@section('content')
    @include('layouts.navigation')

    {{ $slot }}
@endsection
