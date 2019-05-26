<?php

namespace JideMusty\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        "If you can see Chuck Norris, he can see you. If you can\'t see Chuck Norris you may be only seconds away from death.",
        'Chuck Norris does not wear a condom. Because there is no such thing as protection from Chuck Norris.',
        "They once made a \"Chuck Norris\" brand toilet paper, but it wouldn't take shit from anybody.",
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
