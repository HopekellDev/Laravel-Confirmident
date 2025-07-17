<?php

namespace HopekellDev\Confirmident\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Confirmident's Identity Verification laravel package
 * @author Hope Ezenwa- Hopekell <hopekelltech@gmail.com>
 * @version 1
 **/
class Confirmident extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'confirmident';
    }
}
