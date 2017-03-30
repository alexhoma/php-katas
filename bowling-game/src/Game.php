<?php

namespace PHPKatas\BowlingGame;

class Game
{
    private $score;

    public function roll(int $knockedPins)
    {
        $this->score = $this->score + $knockedPins;
    }

    public function score()
    {
        return $this->score;
    }
}