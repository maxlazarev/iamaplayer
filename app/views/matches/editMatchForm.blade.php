@extends('layouts.default')

@section('content')

{{Form::open(array('route' => array('saveMatch', $match->id)))}}
<p>
    <a href="{{route('singleTeam', $match->home_team)}}">{{$match->homeTeam->name}}</a>
    {{Form::text('homeScored', $match->home_scored)}} : {{Form::text('awayScored', $match->away_scored)}}
    <a href="{{route('singleTeam', $match->away_team)}}">{{$match->awayTeam->name}}</a>
</p>
<p>
    {{Form::submit('Save')}}
</p>
<p>
    @if ($errors->has())

    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach

    @endif
</p>
@stop