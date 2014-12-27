<div style="font-size: 2em">
    <a href="{{route('showTable')}}">Table</a> <a href="{{route('allMatches')}}">Matches</a> <a href="{{route('allTeams')}}">Teams</a>
    @if(isset($authData))
        {{$authData->first_name}} {{$authData->last_name}}
        <a href="{{route('logout')}}?r={{Request::url()}}">Sign out</a>
    @else 
        Anonymous
        <a href="{{route('login')}}?r={{Request::url()}}">Log in</a>
        <a href="{{route('signin')}}?r={{Request::url()}}">Sign in</a>
    @endif
</div>