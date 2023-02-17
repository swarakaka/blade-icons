<?php

declare(strict_types=1);

namespace Syntax\Icons;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\Finder\Finder;

class IconServiceProvider extends ServiceProvider
{
    /**
     * Register bindings the service provider.
     */
    public function register()
    {
        $this->app->singleton(IconFinder::class, static function () {
            return new IconFinder();
        });

        Blade::component('syntax-icon', IconComponent::class);
    }
}

