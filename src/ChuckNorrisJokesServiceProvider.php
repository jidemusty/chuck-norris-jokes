<?php

namespace JideMusty\ChuckNorrisJokes;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use JideMusty\ChuckNorrisJokes\Console\ChuckNorrisCommand;
use JideMusty\ChuckNorrisJokes\Controllers\ChuckNorrisController;

class ChuckNorrisJokesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ChuckNorrisCommand::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'chuck-norris');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/chuck-norris')
        ]);

        Route::get('chuck-norris', ChuckNorrisController::class);
    }

    public function register()
    {
        $this->app->bind('chuck-norris', function () {
            return new JokeFactory();
        });
    }
}
