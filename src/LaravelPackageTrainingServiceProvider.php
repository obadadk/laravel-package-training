<?php

namespace Obadadk\LaravelPackageTraining;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Obadadk\LaravelPackageTraining\Commands\LaravelPackageTrainingCommand;

class LaravelPackageTrainingServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-package-training')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-package-training_table')
            ->hasCommand(LaravelPackageTrainingCommand::class);
    }
}
