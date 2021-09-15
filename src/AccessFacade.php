<?php

namespace GetThingsDone\Access;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GetThingsDone\Access\Access
 */
class AccessFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'skeleton';
    }
}
