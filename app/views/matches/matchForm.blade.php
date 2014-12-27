@extends('layouts.default')

@section('content')


{{Form::open(array('route' => 'addMatch'))}}
    <p>
        {{ Form::label('homeTeam', 'Home team:')}}
        {{ Form::select('homeTeam', $teams)}}

        {{ Form::text('homeScored')}}
    </p>
    <p>
        {{ Form::label('awayTeam', 'Away team:')}}
        {{ Form::select('awayTeam', $teams)}}
        {{ Form::text('awayScored')}}
    </p>
    <p>
        {{ Form::submit('Save') }}
    </p>

{{Form::close()}}
@if ($errors->has())

@foreach ($errors->all() as $error)
<div>{{ $error }}</div>
@endforeach

@endif
@stop