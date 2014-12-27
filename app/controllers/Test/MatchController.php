<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 11.12.14
 * Time: 18:59
 */

class MatchController extends BaseController
{
    public function allMatches()
    {
        $matches = Match::orderBy('created_at', 'DESC')->get();
        return View::make('matches.allMatches', compact('matches'));
    }

    public function singleMatch($id)
    {
        $match = Match::find($id);
        return View::make('matches.singleMatch')->with('match', $match);
    }

    public function addMatchForm(){
        $teamObjects = Team::get(array('id','name'));
        $teams = array();
        foreach($teamObjects as $team){
            $teams[$team->id] = $team->name;
        }
        return View::make('matches.matchForm', compact('teams'));
    }

    public function addMatch(){

        $validator = Validator::make(Input::all(), Match::$validationRules);
        if ($validator->fails()){
            return Redirect::back()->withErrors($validator);
        }

        $match = new Match;
        $match->home_team = Input::all()['homeTeam'];
        $match->home_scored = Input::all()['homeScored'];
        $match->away_team = Input::all()['awayTeam'];
        $match->away_scored = Input::all()['awayScored'];
        $match->save();

        $matches = Match::orderBy('created_at', 'DESC')->get();
        return View::make('matches.allMatches', compact('matches'));
    }

    public function editMatchForm($id){
        $match = Match::find($id);
        return View::make('matches.editMatchForm', compact('match'));
    }

    public function saveMatch($id){
        $match = Match::find($id);

        $validator = Validator::make(Input::all(), Match::$validationRules);
        if ($validator->fails()){
            return Redirect::back()->withErrors($validator);
        }

        $match->home_scored = Input::all()['homeScored'];
        $match->away_scored = Input::all()['awayScored'];
        $match->save();
        return View::make('matches.singleMatch', compact('match'));
    }
    public function deleteMatch($id){
        Match::destroy($id);
        return Redirect::route('allMatches');

    }
} 