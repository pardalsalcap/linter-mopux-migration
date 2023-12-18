<?php

namespace Pardalsalcap\LinterMopuxMigration;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Pardalsalcap\LinterMopuxMigration\Commands\LinterMopuxMigrationCommand;

class LinterMopuxMigrationServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('linter-mopux-migration')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_linter-mopux-migration_table')
            ->hasCommand(LinterMopuxMigrationCommand::class);
    }
}
