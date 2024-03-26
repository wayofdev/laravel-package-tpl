<?php

declare(strict_types=1);

namespace WayOfDev\Tests;

use Faker\Factory as FakerFactory;
use Faker\Generator;
use Orchestra\Testbench\TestCase as Orchestra;
use WayOfDev\Package\Bridge\Laravel\Providers\PackageServiceProvider;

use function array_key_exists;

abstract class TestCase extends Orchestra
{
    final protected static function faker(string $locale = 'en_US'): Generator
    {
        /** @var array<string, Generator> $fakers */
        static $fakers = [];

        if (! array_key_exists($locale, $fakers)) {
            $fakers[$locale] = FakerFactory::create($locale);
        }

        return $fakers[$locale];
    }

    public function ignorePackageDiscoveriesFrom(): array
    {
        return ['*', 'spatie/laravel-ray'];
    }

    protected function getPackageProviders($app): array
    {
        return [
            PackageServiceProvider::class,
        ];
    }
}
