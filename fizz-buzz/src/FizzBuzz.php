<?php

namespace PHPKatas\FizzBuzz;

use Exception;

final class FizzBuzz
{
    public function execute(int $number)
    {
        if ($this->isZeroOrNegative($number)) {
            throw new Exception('Number can not be negative.');
        }

        if ($this->isDivisibleByThreeAndFive($number)) {
            return 'FizzBuzz';
        }

        if ($this->isDivisibleByThree($number)) {
            return 'Fizz';
        }

        if ($this->isDivisibleByFive($number)) {
            return 'Buzz';
        }

        return $number;
    }

    private function isZeroOrNegative(int $number): bool
    {
        return $number < 1;
    }

    private function isDivisibleByThree(int $number): bool
    {
        return $number % 3 == 0;
    }

    private function isDivisibleByFive(int $number): bool
    {
        return $number % 5 == 0;
    }

    private function isDivisibleByThreeAndFive($number): bool
    {
        return $this->isDivisibleByThree($number)
               && $this->isDivisibleByFive($number);
    }
}