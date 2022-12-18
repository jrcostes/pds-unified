<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Form extends Model
{
    use LogsActivity;
    protected $fillable = [
        'answers'
    ];

    // public function users()
    // {

    // }

    protected static $logName = 'system';
    public function getDescriptionForEvent(string $eventName): string
    {
            return "A user has {$eventName} a form";
    }
}
