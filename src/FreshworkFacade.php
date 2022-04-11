<?php
namespace AhmeddIbrahim\Freshwork;

use Illuminate\Support\Facades\Facade;

class FreshworkFacade extends Facade
{
    protected static function getFacadeAccessor(): String
    {
        return 'freshwork';
    }
}
