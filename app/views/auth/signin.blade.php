@extends('layouts.default')

@section('content')
{{Form::open(array('route' => 'submitSignin'))}}

{{Form::label('email', 'Email')}}
{{Form::email('email')}}
{{$errors->first('email')}}

{{Form::label('password', 'Password')}}
{{Form::password('password')}}
{{$errors->first('password')}}

{{Form::label('first_name', 'First name')}}
{{Form::text('first_name')}}
{{$errors->first('first_name')}}

{{Form::label('last_name', 'Last name')}}
{{Form::text('last_name')}}
{{$errors->first('last_name')}}

{{Form::hidden('r', $redirectUrl)}}

{{Form::submit('Sign in')}}

{{Form::close()}}
@stop