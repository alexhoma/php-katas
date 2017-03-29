<?php

namespace PHPKatas\FizzBuzz;

final class FizzBuzz
{
    const FIZZ_STRING = 'Fizz';
    const BUZZ_STRING = 'Buzz';
    const FIZZ_NUMBER = 3;
    const BUZZ_NUMBER = 5;

    private $number;

    public function __construct(Number $number)
    {
        $this->number = $number;
    }

    public function execute()
    {
        $number = $this->number->get();

        if ($this->isFizzBuzz($number)) {
            return self::FIZZ_STRING . self::BUZZ_STRING;
        }

        if ($this->isFizz($number)) {
            return self::FIZZ_STRING;
        }

        if ($this->isBuzz($number)) {
            return self::BUZZ_STRING;
        }

        return $number;
    }

    private function isFizz(int $number): bool
    {
        return $number % self::FIZZ_NUMBER == 0;
    }

    private function isBuzz(int $number): bool
    {
        return $number % self::BUZZ_NUMBER == 0;
    }

    private function isFizzBuzz($number): bool
    {
        return $this->isFizz($number)
               && $this->isBuzz($number);
    }
}