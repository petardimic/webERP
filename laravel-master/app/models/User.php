<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	protected $fillable = array(
	                            'username',
	                            'email',
	                            'name'
	                            );
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public function getRememberToken()
	{
		return $this->remember_token;
	}

	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
		return 'remember_token';
	}

	public function getUserType()
	{
		return $this->user_type;
	}

	public function getSystemID()
	{
		return $this->system_id;
	}

	public function getAccountStatus()
	{
		return $this->account_status;
	}

	public function getUserBySystemID($systemID)
	{
		return $this->where('system_id', $systemID)
			->first();
	}

	public function getLoginSrc()
	{
		return $this->login_src;
	}

	public function getSocialUserID()
	{
		return $this->social_user_id;
	}
}