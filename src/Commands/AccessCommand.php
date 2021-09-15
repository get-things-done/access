<?php

namespace GetThingsDone\Access\Commands;

use Illuminate\Console\Command;

class AccessCommand extends Command
{
    public $signature = 'skeleton';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
