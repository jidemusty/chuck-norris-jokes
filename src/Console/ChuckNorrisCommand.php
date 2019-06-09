<?php

namespace JideMusty\ChuckNorrisJokes\Console;

use Illuminate\Console\Command;
use JideMusty\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisCommand extends Command
{
    protected $signature = 'chuck-norris';

    protected $description = 'Output a funny Chuck Norris Joke';

    public function handle()
    {
        $this->info(ChuckNorris::getRandomJoke());
    }
}