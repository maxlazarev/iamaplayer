<?php

class Competition extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['name', 'owner'];

    public function admin()
    {
        return $this->hasOne('Player', 'id', 'owner');
    }

    public function stages()
    {
        return $this->hasMany('Stage', 'competition');
    }
}