<?php

namespace Tests\TestCases;

use Moves\Eloquent\Verifiable\Rules\Calendar\Providers\VerifiableCalendarRulesProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->loadMigrationsFrom(__DIR__ . '/../Assets/database/migrations');
    }

    protected function getPackageProviders($app)
    {
        return [
            VerifiableCalendarRulesProvider::class
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // Setup default database to use sqlite :memory:
        $app['config']->set('database.default', 'testbench');
        $app['config']->set('database.connections.testbench', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);
    }
}
