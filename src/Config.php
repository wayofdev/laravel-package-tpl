<?php

declare(strict_types=1);

namespace WayOfDev\Package;

use WayOfDev\Package\Contracts\ConfigRepository;

class Config implements ConfigRepository
{
    private const KEY = 'package';

    public static function fileName(): string
    {
        return self::KEY . '.php';
    }

    public static function key(): string
    {
        return self::KEY;
    }

    public static function path(): string
    {
        return __DIR__ . '/../config/';
    }
}
