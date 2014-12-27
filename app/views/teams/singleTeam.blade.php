@extends('layouts.default')

@section('content')

<h1>{{{ $team->name or 'Team not found'}}}</h1>
<a href="{{{route('allTeams')}}}">All teams</a>

@foreach($matches as $match)
    @include('partials.match')
@endforeach

@stop