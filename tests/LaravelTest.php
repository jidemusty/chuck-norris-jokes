<?php

namespace JideMusty\ChuckNorrisJokes\Tests;

use JideMusty\ChuckNorrisJokes\ChuckNorrisJokesServiceProvider;
use JideMusty\ChuckNorrisJokes\Console\ChuckNorrisCommand;
use Illuminate\Support\Facades\Artisan;
use JideMusty\ChuckNorrisJokes\Facades\ChuckNorris;
use Orchestra\Testbench\TestCase;

class LaravelTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            ChuckNorrisJokesServiceProvider::class
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'ChuckNorris' => ChuckNorrisCommand::class
        ];
    }

    /** @test */
    public function the_console_command_returns_joke()
    {
        $this->withoutMockingConsoleOutput();

        ChuckNorris::shouldReceive('getRandomJoke')
            ->once()
            ->andReturn('some joke');

        $this->artisan('chuck-norris');

        $output = Artisan::output();

        $this->assertSame('some joke'.PHP_EOL, $output);
    }
}