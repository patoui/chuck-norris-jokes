<?php

namespace Patoui\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        'Some people wear Superman pajamas. Superman wears Chuck Norris pajamas',
        'Chuck Norris\' belly button is actually a power outlet',
        'Chuck Norris is the reason why Waldo is hiding',
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
