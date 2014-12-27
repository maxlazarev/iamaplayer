<?php

class Match extends \Eloquent {

	protected $fillable = [];

    protected $table = 'matches';

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

    public static $validationRules = array(
        'homeTeam' => 'exists:teams,id',
        'awayTeam' => 'exists:teams,id|different:homeTeam',
        'homeScored' => 'integer|required',
        'awayScored' => 'integer|required'
    );
}