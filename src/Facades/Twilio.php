<?php

namespace Shaz3e\Twilio\Facades;

use Illuminate\Support\Facades\Facade;

class Twilio extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'twilio';
    }
}
