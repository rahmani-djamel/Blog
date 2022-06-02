@extends('components.layouts.base')

@section('body')
<div class="w-full h-full ">
<x-organisme.sidebar />

      <div class="flex items-center ">
        @yield('content')

        @isset($slot)
            {{ $slot }}
        @endisset
      </div>
    </div>

@endsection
