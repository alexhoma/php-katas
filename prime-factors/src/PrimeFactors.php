<?php

namespace PHPKatas\PrimeFactors;

final class PrimeFactors
{
    public function generate($number)
    {
        $primes  = [];
        $divider = 2;

        while($number >= $divider) {
            while ($number % $divider == 0) {
                $primes[] = $divider;

                $number = $number / $divider;
            }

            $divider++;
        }

        return $primes;
    }
}