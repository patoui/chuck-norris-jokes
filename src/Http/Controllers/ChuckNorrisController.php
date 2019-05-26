<?php

namespace Patoui\ChuckNorrisJokes\Http\Controllers;

use Patoui\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisController
{
    public function __invoke()
    {
        return view('chuck-norris::joke')
            ->with('joke', ChuckNorris::getRandomJoke());
    }
}
