<p>
    <a href="{{route('singleTeam', $match->home_team)}}">{{$match->homeTeam->name}}</a>
    <a href="{{route('singleMatch', $match->id)}}">{{$match->home_scored}} : {{$match->away_scored}}</a>
    <a href="{{route('singleTeam', $match->away_team)}}">{{$match->awayTeam->name}}</a>
</p>