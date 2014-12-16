<?php

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;

class User extends Eloquent implements UserInterface, RemindableInterface
{
    use UserTrait, RemindableTrait;

    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'users';

    /**
     * The fillable property specifies which attributes should be mass-assignable.
     * @var array
     */
    protected $fillable = array('email', 'password');

    /**
     * The attributes excluded from the model's JSON form.
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

    /**
     * Laravel hasMany relation (User-[many]->Record).
     * @return object
     */
    public function records()
    {
        return $this->hasMany('Record');
    }

    /**
     * Set has_signed_in_once to true.
     * Update last_signin.
     */
    public function saveSignIn()
    {
        $this->has_signed_in_once = true;
        $this->last_signin = date('Y-m-d H:i:s');

        $this->save();
    }

    /**
     * Check if given password matches password of User instance.
     * @param $password string Password to check.
     * @return bool
     */
    private function passwordMatches($password)
    {
        if (Hash::check($password, $this->password)) {
            return true;
        }
        return false;
    }

    /**
     * Record count as an integer.
     * @return int
     */
    private function recordCount()
    {
        return $this->records()->count();
    }

    /**
     * Display record count like: "1 record" or "2 records".
     * @return string
     */
    public function echoRecordCount()
    {
        if ($this->recordCount() == 1) {
            return $this->recordCount() . " record";
        }

        return $this->recordCount() . " records";
    }

    /**
     * Change the email of a User.
     * @param $new_email string The new email.
     * @param $password  string The current password.
     * @return bool True if password matches and no Exceptions.
     */
    public function changeEmail($new_email, $password)
    {
        if (!$this->passwordMatches($password)) {
            return false;
        }

        $this->email = $new_email;
        $this->save();

        return true;
    }

    /**
     * Change the password of a User.
     * @param $new_password string The new password.
     * @param $password     string The current password.
     * @return bool True if password matches and no Exceptions.
     */
    public function changePassword($new_password, $password)
    {
        if (!$this->passwordMatches($password)) {
            return false;
        }

        $this->password = Hash::make($new_password);
        $this->save();

        return true;
    }
}
