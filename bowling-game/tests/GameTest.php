<?php

namespace PHPKatas\BowlingGameTest;

use PHPKatas\BowlingGame\Game;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    /** @test */
    public function it_should_roll_a_ball()
    {
        $this->assertNull(
            (new Game())->roll(1)
        );
    }

    /** @test */
    public function it_return_the_score_amount()
    {
        $game = new Game();
        $game->roll(10);
        $game->roll(12);

        $this->assertEquals(
            22, $game->score()
        );
    }


}