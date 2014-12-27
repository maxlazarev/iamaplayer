@extends('layouts.default')

@section('content')

<table border="1">
    <tr>
        <td>Name</td><td>Played</td><td>Won</td><td>Drawn</td><td>Lost</td><td>Scored</td><td>Conceded</td><td>Points</td>
    </tr>
    @foreach($table as $name => $data)
    <tr>
        <td>{{$name}}</td><td>{{$data['m']}}</td><td>{{$data['w']}}</td><td>{{$data['d']}}</td><td>{{$data['l']}}</td><td>{{$data['s']}}</td><td>{{$data['c']}}</td><td>{{$data['p']}}</td>
    </tr>
    @endforeach
</table>


@stop