@extends('layouts.default')

@section('content')


@foreach($teams as $team)
    <p><a href='{{{@route('singleTeam',$team->id )}}}'>{{{$team->name}}}</a></p>
@endforeach

@stop