<?php

namespace Zupaazhai\Windtall\Commands;

use Illuminate\Console\Command;

class WindtallCommand extends Command
{
    public $signature = 'windtall';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
