<?php

namespace PHPKatas\BowlingGame;

class Game
{
    private $score;

    public function roll(int $knockedPins)
    {
        if ($knockedPins > 10) {
            return 'You can not knock down more than 10 pins';
        }

        $this->score = $this->score + $knockedPins;
    }

    public function score()
    {
        return $this->score;
    }
}