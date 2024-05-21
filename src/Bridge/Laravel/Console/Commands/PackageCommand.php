<?php

declare(strict_types=1);

namespace WayOfDev\Package\Bridge\Laravel\Console\Commands;

use Illuminate\Console\Command;

class PackageCommand extends Command
{
    protected $signature = 'package:command';

    protected $description = 'Package command description';

    public function handle(): int
    {
        $this->info('Package command executed');

        return self::SUCCESS;
    }
}
