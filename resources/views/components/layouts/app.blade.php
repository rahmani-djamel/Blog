@extends('components.layouts.base')

@section('body')
<x-organisme.sidebar />
    @yield('content')

    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
