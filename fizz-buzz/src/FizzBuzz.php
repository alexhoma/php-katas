<?php

namespace PHPKatas\FizzBuzz;

use InvalidArgumentException;

final class FizzBuzz
{
    const FIZZ_STRING = 'Fizz';
    const BUZZ_STRING = 'Buzz';

    private $number;

    public function __construct(int $number)
    {
        $this->setNumber($number);
    }

    /**
     * @param int $number
     */
    private function setNumber(int $number)
    {
        $this->checkIsValidNumber($number);
        $this->number = $number;
    }

    /**
     * @param int $number
     * @throws InvalidArgumentException
     */
    private function checkIsValidNumber(int $number)
    {
        if ($this->isZeroOrNegative($number)) {
            throw new InvalidArgumentException('Number can not be negative.');
        }
    }

    public function execute()
    {

        if ($this->isDivisibleByThreeAndFive($this->number)) {
            return self::FIZZ_STRING . self::BUZZ_STRING;
        }

        if ($this->isDivisibleByThree($this->number)) {
            return self::FIZZ_STRING;
        }

        if ($this->isDivisibleByFive($this->number)) {
            return self::BUZZ_STRING;
        }

        return $this->number;
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