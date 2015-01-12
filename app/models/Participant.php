<?php

class Participant extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

    public function ofStage()
    {
        return $this->belongsTo('stage', 'id', 'stage');
    }
}