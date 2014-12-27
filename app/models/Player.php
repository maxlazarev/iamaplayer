<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;


class Player extends \Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

	// Don't forget to fill this array
	protected $fillable = ['email', 'password', 'lastName', 'firstName', 'admin'];

    protected $hidden = array('password', 'remember_token', 'created_at', 'updated_at');

    public static $validationRules = array(
        'email' => 'required|email|unique:players',
        'password' => 'required|min:6',
        'firstName' => 'required',
        'lastName' => 'required'
    );
}