<?php


namespace App\Facades;
use Illuminate\Support\Facades\Facade;


class PetikovService extends Facade
{
    protected static function getFacadeAccessor()
    {
//        parent::getFacadeAccessor(); // TODO: Change the autogenerated stub
        return 'MyFunctions';
    }
}