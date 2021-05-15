<?php

namespace Zupaazhai\Windtall;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

// use Zupaazhai\Windtall\Commands\WindtallCommand;

class WindtallServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('windtall')
            ->hasConfigFile()
            ->hasViews();
        // ->hasMigration('create_windtall_table')
            // ->hasCommand(WindtallCommand::class);
    }
}
