<?php

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;

class Record extends Eloquent implements UserInterface, RemindableInterface
{
    use UserTrait, RemindableTrait;

    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'records';

    /**
     * The fillable property specifies which attributes should be mass-assignable.
     * @var array
     */
    protected $fillable = array('artist', 'title', 'year', 'user_id');
}
