<?php

namespace HopekellDev\Confirmident\Facades;

use Illuminate\Support\Facades\Facade;

class Confirmident extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'confirmident';
    }
}
