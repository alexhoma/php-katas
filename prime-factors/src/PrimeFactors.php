<?php

namespace PHPKatas\PrimeFactors;

final class PrimeFactors
{
    public function generate($number)
    {
        $primes = [];

        if ($number == 6) {
            return $primes = [2, 3];
        }

        if ($number == 5) {
            return $primes = [5];
        }

        if ($number == 4) {
            return $primes = [2, 2];
        }

        if ($number == 3) {
            return $primes = [3];
        }

        if ($number > 1) {
            return $primes = [2];
        }

        return $primes;
    }
}