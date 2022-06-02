@extends('components.layouts.base')

@section('body')
<x-organisme.sidebar />
    <div class="w-full h-full ">
      <div class="flex items-center  p-10 border-4 border-dotted">
        @yield('content')

        @isset($slot)
            {{ $slot }}
        @endisset
      </div>
    </div>

@endsection
