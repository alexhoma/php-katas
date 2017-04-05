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

    public function score(): int
    {
        $score    = 0;
        $i        = 0;
        $isLastRoll = false;
        $isSpare  = false;
        $isStrike = false;

        do {
            $first  = $this->rolls[$i++];
            if (!$isLastRoll) {
                $second = $this->rolls[$i++];
            }

            if ($isStrike && !$isLastRoll) {
                $score += ($first + $second) * 2;
                $isStrike = false;
            } else if ($isSpare && !$isLastRoll) {
                $score += ($first * 2) + $second;
                $isSpare = false;
            } else if (!$isLastRoll) {
                $score += $first + $second;
            } else {
                $score += $first;
            }

            if ($i == count($this->rolls) - 1) { // is last roll
                $isLastRoll = true;
            }
            else if ($first == 10) {
                $isStrike = true;
            }
            else if ($first + $second == 10) {
                $isSpare = true;
            }

        } while ($i < count($this->rolls));

        return $score;
    }

    /**
     * @param $knockedPins
     * @throws Exception
     */
    private function checkIsValidRoll($knockedPins)
    {
        if ($knockedPins > self::MAX_ROLL_SCORE || $knockedPins < self::MIN_ROLL_SCORE) {
            throw new Exception('Not a valid roll');
        }
    }
}