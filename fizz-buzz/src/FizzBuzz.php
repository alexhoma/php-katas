<?php

namespace PHPKatas\FizzBuzz;

use Exception;

final class FizzBuzz
{
    public function execute(int $number)
    {
        if ($number < 1) {
            throw new Exception('Number can not be negative.');
        }

        if ($number % 3 == 0 && $number % 5 == 0) {
            return 'FizzBuzz';
        }

        if ($number % 3 == 0) {
            return 'Fizz';
        }

        if ($number % 5 == 0) {
            return 'Buzz';
        }

        return $number;
    }
}