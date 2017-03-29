<?php

namespace PHPKatas\FizzBuzzTest;

use PHPKatas\FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /** @test */
    public function it_should_return_1_when_number_is_1()
    {
        $this->assertEquals(
            1,
            (new FizzBuzz())->execute(1)
        );
    }

    /** @test */
    public function it_should_return_2_when_number_is_2()
    {
        $this->assertEquals(
            2,
            (new FizzBuzz())->execute(2)
        );
    }

    /** @test */
    public function it_should_return_Fizz_when_number_is_divisible_by_3()
    {
        $this->assertEquals(
            'Fizz',
            (new FizzBuzz())->execute(3)
        );
    }

    /** @test */
    public function it_should_return_Buzz_when_number_is_divisible_by_5()
    {
        $this->assertEquals(
            'Buzz',
            (new FizzBuzz())->execute(5)
        );
    }

    /** @test */
    public function it_should_return_FizzBuzz_when_number_is_divisible_by_3_and_5()
    {
        $this->assertEquals(
            'FizzBuzz',
            (new FizzBuzz())->execute(15)
        );
    }
}