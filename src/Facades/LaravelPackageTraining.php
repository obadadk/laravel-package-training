<?php

namespace Obadadk\LaravelPackageTraining\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Obadadk\LaravelPackageTraining\LaravelPackageTraining
 */
class LaravelPackageTraining extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-package-training';
    }
}
