@extends('layouts.default')

@section('content')
    {{Form::open(array('route' => 'submitLogin'))}}
    @if(isset($failed))
        Invalid user name or password
    @endif
    {{Form::label('email', 'Email')}}
    {{Form::email('email')}}
    {{$errors->first('email')}}

    {{Form::label('password', 'Password')}}
    {{Form::password('password')}}
    {{$errors->first('password')}}
    {{Form::hidden('r', $redirectUrl)}}
    {{Form::submit('Log in')}}

    {{Form::close()}}
@stop