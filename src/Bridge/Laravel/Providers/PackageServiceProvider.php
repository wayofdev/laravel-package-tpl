<?php

declare(strict_types=1);

namespace WayOfDev\Package\Bridge\Laravel\Providers;

use Illuminate\Support\ServiceProvider;
use WayOfDev\Package\Config;

final class PackageServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                Config::path() . Config::fileName() => config_path(Config::fileName()),
            ], 'config');

            $this->registerConsoleCommands();
        }
    }

    public function register(): void
    {
        // @phpstan-ignore-next-line
        if (! $this->app->configurationIsCached()) {
            $this->mergeConfigFrom(
                Config::path() . Config::fileName(),
                Config::key()
            );
        }
    }

    private function registerConsoleCommands(): void
    {
        $this->commands([]);
    }
}
