<?php

namespace JideMusty\ChuckNorrisJokes\Controllers;

use JideMusty\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisController
{
    public function __invoke()
    {
        return view('chuck-norris::joke', [
            'joke' => ChuckNorris::getRandomJoke()
        ]);
    }
}