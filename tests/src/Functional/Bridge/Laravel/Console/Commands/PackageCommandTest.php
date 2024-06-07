<?php

declare(strict_types=1);

namespace WayOfDev\Tests\Functional\Bridge\Laravel\Console\Commands;

use PHPUnit\Framework\Attributes\Test;
use WayOfDev\Tests\Functional\TestCase;

class PackageCommandTest extends TestCase
{
    #[Test]
    public function it_executes_the_package_command_successfully(): void
    {
        $this->artisan('package:command')
            ->expectsOutput('Package command executed')
            ->assertExitCode(0);
    }
}
