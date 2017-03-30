<?php

namespace PHPKatas\BowlingGame;

class Game
{
    private $score;

    public function roll(int $knockedPins)
    {
        $this->score = $this->score + $knockedPins;

        return $this->score;
    }

    public function score()
    {
        return $this->score;
    }
}