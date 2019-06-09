<?php

namespace JideMusty\ChuckNorrisJokes;

use Illuminate\Support\ServiceProvider;
use JideMusty\ChuckNorrisJokes\Console\ChuckNorrisCommand;

class ChuckNorrisJokesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ChuckNorrisCommand::class,
            ]);
        }
    }

    public function register()
    {
        $this->app->bind('chuck-norris', function () {
            return new JokeFactory();
        });
    }
}
