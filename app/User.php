<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Activitylog\Traits\LogsActivity;

class User extends Authenticatable
{
    use Notifiable, LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $username = 'name';
    protected static $logName = 'system';
    public function getDescriptionForEvent(string $eventName): string
    {
        if ($eventName == 'created'){
            return "A new user has been created and has logged in";

        } else if ($eventName == 'updated'){
            return "A user has logged in";

        } 
        // else if ($eventName == 'logout'){
        //     return "A user has logged out";
        // }
    }
}




