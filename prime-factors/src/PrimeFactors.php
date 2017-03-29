<?php

namespace PHPKatas\PrimeFactors;

final class PrimeFactors
{
    public function generate(int $number): array
    {
        $primes = [];

        for ($divider = 2; $number >= $divider; $divider++) {
            for (; $number % $divider == 0; $number /= $divider) {
                $primes[] = $divider;
            }
        }

        return $primes;
    }
}