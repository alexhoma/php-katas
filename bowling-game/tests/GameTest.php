<?php

namespace PHPKatas\BowlingGameTest;

use Exception;
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
    public function it_should_throw_an_exception_if_knocked_pins_are_negative_or_more_than_10()
    {
        $this->expectException(Exception::class);
        (new Game())->roll(11);
        (new Game())->roll(-1);
    }

    /** @test */
    public function it_should_roll_a_ball_without_errors()
    {
        $this->assertNull(
            (new Game())->roll(1)
        );
    }

    /**
     * @test
     * @dataProvider gameRollsProvider
     * @param $given
     * @param $expected
     */
    public function it_should_return_the_expected_score_amount($given, $expected)
    {
        $game = new Game();
        foreach($given as $roll) {
            $game->roll($roll);
        }

        $this->assertEquals(
            $expected, $game->score()
        );
    }

    public function gameRollsProvider()
    {
        return [
            [[4,4], 8],                  // simple two rolls
            [[4, 4, 2, 5], 15],          // more than 2 rolls
            [[5, 5, 5, 1], 21],          // is spare
            [[10, 2, 5, 1], 24],         // is Strike
            [[10, 0, 10, 0, 2, 2], 38],  // is Strike harder

            // Serious business for debugging
            [[1, 4, 4, 5, 6, 4, 5, 5], 39],
            [[1, 4, 4, 5, 6, 4, 5, 5, 10, 0], 59],
            [[1, 4, 4, 5, 6, 4, 5, 5, 10, 0, 0, 1], 61],
            [[1, 4, 4, 5, 6, 4, 5, 5, 10, 0, 0, 1, 7, 3], 71],
            [[1, 4, 4, 5, 6, 4, 5, 5, 10, 0, 0, 1, 7, 3, 6, 4], 87],
            [[1, 4, 4, 5, 6, 4, 5, 5, 10, 0, 0, 1, 7, 3, 6, 4, 10, 0], 107],
            [[1, 4, 4, 5, 6, 4, 5, 5, 10, 0, 0, 1, 7, 3, 6, 4, 10, 0, 2, 8], 127],

            // Full game (with last roll)
            [[1, 4, 4, 5, 6, 4, 5, 5, 10, 0, 0, 1, 7, 3, 6, 4, 10, 0, 2, 8, 6], 133]
        ];
    }
}