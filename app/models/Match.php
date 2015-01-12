<?php

class Match extends \Eloquent {

	// Don't forget to fill this array
	protected $fillable = [];

    public function homeTeam() {
        return $this->belongsTo('Team', 'home_team');
    }

    public function awayTeam() {
        return $this->belongsTo('Team', 'away_team');
    }

    public function scopeOfTeam($query, $id)
    {
        return $query->where('home_team', '=', $id)->orWhere('away_team', '=', $id);
    }

    public function belongsToRound()
    {
        return $this->belongsTo('round', 'id', 'round');
    }

    public static $rules = array(
        'homeTeam' => 'exists:teams,id',
        'awayTeam' => 'exists:teams,id|different:homeTeam',
        'homeScored' => 'integer|required',
        'awayScored' => 'integer|required'
    );

}