<?php

namespace Obadadk\LaravelPackageTraining\Commands;

use Illuminate\Console\Command;

class LaravelPackageTrainingCommand extends Command
{
    public $signature = 'laravel-package-training';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
