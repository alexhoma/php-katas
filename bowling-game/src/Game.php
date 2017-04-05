<?php

namespace PHPKatas\BowlingGame;

use Exception;

class Game
{
    const MAX_ROLL_SCORE = 10;
    const MIN_ROLL_SCORE = 0;

    private $rolls = [];

    public function roll(int $knockedPins)
    {
        $this->checkIsValidRoll($knockedPins);

        $this->rolls[] = $knockedPins;
    }

    public function score()
    {
        $score    = 0;
        $i        = 0;
        $isSpare  = false;
        $isStrike = false;

        do {
            $first  = $this->rolls[$i++];
            $second = $this->rolls[$i++];

            if ($isStrike) {
                $score += ($first + $second) * 2;
                $isStrike = false;
            } else if ($isSpare) {
                $score += ($first * 2) + $second;
                $isSpare = false;
            } else {
                $score += $first + $second;
            }

            if ($first == 10) {
                $isStrike = true;
            }
            if ($first + $second == 10) {
                $isSpare = true;
            }

        } while ($i < count($this->rolls));

        return $score;
    }

    private function checkIsValidRoll($knockedPins)
    {
        if ($knockedPins > self::MAX_ROLL_SCORE || $knockedPins < self::MIN_ROLL_SCORE) {
            throw new Exception('Not a valid roll');
        }
    }
}