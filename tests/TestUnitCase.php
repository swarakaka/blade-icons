<?php

declare(strict_types=1);

namespace Syntax\Icons\Tests;

use Orchestra\Testbench\TestCase;
use Syntax\Icons\IconServiceProvider;

/**
 * Class TestUnitCase.
 */
abstract class TestUnitCase extends TestCase
{
    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('view.paths', [__DIR__.'/views']);
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
           IconServiceProvider::class
        ];
    }
}
