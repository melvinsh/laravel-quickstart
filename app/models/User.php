<?php

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * [$fillable description]
	 *
	 * @var array
	 */
	protected $fillable = array('email', 'password');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/**
	 * Validator rules for signup.
	 * @return array Array of validator rules.
	 */
	public static function rules() {
		return array(
			'email' => 'required|email|unique:users',
			'password' => 'required|min:8|confirmed',
		);
	}

}
