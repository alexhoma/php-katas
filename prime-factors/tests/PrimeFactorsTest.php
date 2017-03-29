<?php

namespace PHPKatas\PrimeFactorsTest;

use PHPKatas\PrimeFactors\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    /**
     * @test
     * @dataProvider numbersProvider
     * @param $given
     * @param $expected
     */
    public function it_should_return_empty_array_when_number_is_1_or_less($given, $expected)
    {
        $this->assertEquals(
            $expected,
            (new PrimeFactors())->generate($given)
        );
    }

    public function numbersProvider()
    {
        return [
            [1, []], [2, [2]],
            [3, [3]], [4, [2, 2]], [5, [5]],
            [6, [2, 3]], [7, [7]], [8, [2, 2, 2]],
            [9, [3, 3]], [10, [2, 5]], [11, [11]],
            [12, [2, 2, 3]], [13, [13]], [14, [2, 7]],
            [15, [3, 5]], [25, [5, 5]], [100, [2, 2, 5, 5]]
        ];
    }
}