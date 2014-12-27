@extends('layouts.default')

@section('content')

    @include('partials.match')

<a href="{{route('editMatch', $match->id)}}">Edit</a></div>
{{Form::open(array('route' => array('deleteMatch',$match->id), 'method'=>'delete', 'class'=>'destroy'))}}
{{Form::Submit('Delete')}}
{{Form::close()}}
@stop