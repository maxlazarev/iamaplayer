@extends('layouts.default')

@section('content')

<a href="{{route('matchForm')}}">Add match</a>

    @foreach($matches as $match)
        @include('partials.match')
    @endforeach

@stop