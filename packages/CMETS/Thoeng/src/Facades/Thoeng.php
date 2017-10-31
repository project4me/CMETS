<?php

namespace CMETS\Thoeng\Facades;

use Illuminate\Support\Facades\Facade;

class Thoeng extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'thoeng';
    }
}