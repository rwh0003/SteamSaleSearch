@extends('layout')

@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                @endif
            </div>
        @endif

        <div class="content">
        @unless ($developers)
            There are no developers! Aw!
        @endunless

            <ul>
            @foreach ($developers as $dev)
                <li>{{ $dev }}</li>
            @endforeach
            </ul>
        </div>
    </div>
@stop