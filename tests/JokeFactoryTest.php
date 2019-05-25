<?php

namespace Patoui\ChuckNorrisJokes\Tests;

use PHPUnit\Framework\TestCase;
use Patoui\ChuckNorrisJokes\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke',
        ]);
        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    /** @test */
    public function it_returns_a_predefined_joke()
    {
        $chuckNorrisJokes = [
            'Some people wear Superman pajamas. Superman wears Chuck Norris pajamas',
            'Chuck Norris\' belly button is actually a power outlet',
            'Chuck Norris is the reason why Waldo is hiding',
        ];

        $jokes = new JokeFactory();
        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $chuckNorrisJokes);
    }
}
