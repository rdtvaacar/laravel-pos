<?php

namespace Rdtvaacar\LaravelPos\Tests;

use Orchestra\Testbench\TestCase;
use Rdtvaacar\LaravelPos\LaravelPosServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelPosServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
