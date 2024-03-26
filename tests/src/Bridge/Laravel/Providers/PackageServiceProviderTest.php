<?php

declare(strict_types=1);

namespace WayOfDev\Tests\Bridge\Laravel\Providers;

use PHPUnit\Framework\Attributes\Test;
use WayOfDev\Package\Bridge\Laravel\Providers\PackageServiceProvider;
use WayOfDev\Tests\TestCase;

class PackageServiceProviderTest extends TestCase
{
    #[Test]
    public function it_publishes_configuration(): void
    {
        $this->artisan('vendor:publish', [
            '--provider' => PackageServiceProvider::class,
        ])->assertExitCode(0);

        $this::assertFileExists(config_path('package.php'));
    }
}
