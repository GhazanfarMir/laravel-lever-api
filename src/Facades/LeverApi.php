<?php

namespace GhazanfarMir\Lever\Api\Facades;

use Illuminate\Support\Facades\Facade;

class LeverApi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'leverapi';
    }
}
