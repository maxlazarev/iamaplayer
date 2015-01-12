<?php

class Stage extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

    public function ofCompetition()
    {
        return $this->belongsTo('competition', 'competition', 'id');
    }

    public function participants()
    {
        return $this->hasMany('participant', 'stage');
    }

    public function teams()
    {
        $teams = $this->belongsToMany('team', 'participants', 'stage', 'team')->withPivot('team','progress');
        return $teams->select('name');
    }

    public function rounds()
    {
        return $this->hasMany('round', 'stage');
    }
}