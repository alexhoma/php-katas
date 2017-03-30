<?php

namespace PHPKatas\BowlingGameTest;

use PHPKatas\BowlingGame\Game;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    /** @test */
    public function it_should_return_the_amount_of_pins_knocked()
    {
        $game = new Game();
        $game->roll(10);
        $game->roll(12);

        $this->assertEquals(
            22,
            $game->score()
        );
    }
}