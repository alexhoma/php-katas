<?php

namespace PHPKatas\PrimeFactors;

final class PrimeFactors
{
    public function generate($number)
    {
        $primes = [];

        if ($number == 3) {
            return $primes = [3];
        }

        while ($number % 2 == 0) {
            $primes[] = 2;

            $number = $number / 2;
        }

        return $primes;
    }
}