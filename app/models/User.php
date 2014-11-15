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

    public function saveSignIn()
    {
        $this->has_signed_in_once = true;
        $this->last_signin = date('Y-m-d H:i:s');

        $this->save();
    }

    /**
     * [echoRecordCount description]
     * @return [type] [description]
     */
    public function echoRecordCount()
    {
        if ($this->recordCount() == 1) {
            return $this->recordCount() . " record";
        }

        return $this->recordCount() . " records";
    }

    /**
     * [recordCount description]
     * @return [type] [description]
     */
    private function recordCount()
    {
        return $this->records()->count();
    }

    /**
     * [comments description]
     * @return [type] [description]
     */
    public function records()
    {
        return $this->hasMany('Record');
    }

    /**
     * [changeEmail description]
     * @param  [type] $new_email [description]
     * @return [type]            [description]
     */
    public function changeEmail($new_email, $password)
    {
        if (!$this->passwordMatches($password)) {
            return false;
        }

        $user = Auth::user();
        $user->email = $new_email;
        $user->save();

        return true;
    }

    /**
     * [passwordMatches description]
     * @param  [type] $password [description]
     * @return [type]           [description]
     */
    private function passwordMatches($password)
    {
        if (Hash::check($password, $this->password)) {
            return true;
        }
        return false;
    }

    /**
     * [changePassword description]
     * @param  [type] $new_password [description]
     * @param  [type] $password     [description]
     * @return [type]               [description]
     */
    public function changePassword($new_password, $password)
    {
        if (!$this->passwordMatches($password)) {
            return false;
        }

        $user = Auth::user();
        $user->password = Hash::make($new_password);
        $user->save();

        return true;
    }

}
