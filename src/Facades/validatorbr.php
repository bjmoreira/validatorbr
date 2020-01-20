<?php

namespace bjmoreira\validatorbr\Facades;

use Illuminate\Support\Facades\Facade;

class validatorbr extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'validatorbr';
    }
}
