<?php

namespace Pardalsalcap\LinterMopuxMigration\Commands;

use Illuminate\Console\Command;

class LinterMopuxMigrationCommand extends Command
{
    public $signature = 'linter-mopux-migration';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
