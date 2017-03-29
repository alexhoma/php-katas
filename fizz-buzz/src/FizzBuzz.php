<?php

namespace PHPKatas\FizzBuzz;

use InvalidArgumentException;

final class FizzBuzz
{
    const FIZZ_STRING = 'Fizz';
    const BUZZ_STRING = 'Buzz';

    public function execute(int $number)
    {
        $this->checkIsValidNumber($number);

        if ($this->isDivisibleByThreeAndFive($number)) {
            return self::FIZZ_STRING . self::BUZZ_STRING;
        }

        if ($this->isDivisibleByThree($number)) {
            return self::FIZZ_STRING;
        }

        if ($this->isDivisibleByFive($number)) {
            return self::BUZZ_STRING;
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

    /**
     * @param int $number
     * @throws Exception
     */
    private function checkIsValidNumber(int $number)
    {
        if ($this->isZeroOrNegative($number)) {
            throw new InvalidArgumentException('Number can not be negative.');
        }
    }
}