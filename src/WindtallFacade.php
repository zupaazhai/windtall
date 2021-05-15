<?php

namespace Zupaazhai\Windtall;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Zupaazhai\Windtall\Windtall
 */
class WindtallFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'windtall';
    }
}
