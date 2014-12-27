<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 11.12.14
 * Time: 21:29
 */

class TeamController extends BaseController{

    public function allTeams(){
        $teams = Team::all();
        return  View::make('teams.allTeams', compact('teams'));
    }
    public function singleTeam($id){
        $team = Team::find($id);
        $matches = Match::ofTeam($id)->orderBy('created_at')->get();
        return  View::make('teams.singleTeam', compact('team'))->with('matches', $matches);
    }
} 