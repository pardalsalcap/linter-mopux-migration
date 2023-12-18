<?php

namespace Pardalsalcap\LinterMopuxMigration\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Pardalsalcap\LinterMopuxMigration\LinterMopuxMigration
 */
class LinterMopuxMigration extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Pardalsalcap\LinterMopuxMigration\LinterMopuxMigration::class;
    }
}
