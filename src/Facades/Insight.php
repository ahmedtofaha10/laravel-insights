<?php

namespace AhmedTofaha\LaravelInsights\Facades;

use Illuminate\Support\Facades\Facade;

class Insight extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AhmedTofaha\LaravelInsights\LaravelInsights::class;
    }
}
