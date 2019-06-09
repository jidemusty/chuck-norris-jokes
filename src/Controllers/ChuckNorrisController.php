<?php

namespace JideMusty\ChuckNorrisJokes\Controllers;

use JideMusty\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisController
{
    public function __invoke()
    {
        return ChuckNorris::getRandomJoke();
    }
}
