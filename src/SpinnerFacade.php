<?php

namespace Mikemike\Spinner;

use Illuminate\Support\Facades\Facade;

class SpinnerFacade extends Facade
{
    protected static function getFacadeAccessor() { 
        return 'spinner';
    }
}
