<?php

namespace PHPKatas\BowlingGameTest;

use PHPKatas\BowlingGame\Game;
use PHPUnit\Framework\TestCase;
use TypeError;

class GameTest extends TestCase
{
    /** @test */
    public function it_should_throw_an_exception_if_param_is_not_an_integer()
    {
        $this->expectException(TypeError::class);
        (new Game())->roll('Not an integer');
    }

    /** @test */
    public function it_should_not_knock_down_more_than_10_pins()
    {
        $this->assertEquals(
            'You can not knock down more than 10 pins',
            (new Game())->roll(11)
        );
    }

    /** @test */
    public function it_should_roll_a_ball()
    {
        $this->assertNull(
            (new Game())->roll(1)
        );
    }


    /** @test */
    public function it_should_return_the_score_amount()
    {
        $game = new Game();
        $game->roll(2);
        $game->roll(5);

        $this->assertEquals(
            7, $game->score()
        );
    }
}