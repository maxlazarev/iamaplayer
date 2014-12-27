<?php

class Team extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	protected $fillable = ['name'];

    public function matches() {
        return $this->hasMany('Match');
    }

}