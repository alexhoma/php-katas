<?php

namespace PHPKatas\FizzBuzzTest;

use InvalidArgumentException;
use PHPKatas\FizzBuzz\FizzBuzz;
use PHPKatas\FizzBuzz\Number;
use PHPKatas\FizzBuzzTest\Dependencies\InvalidNumberStub;
use PHPKatas\FizzBuzzTest\Dependencies\NegativeNumberStub;
use PHPUnit\Framework\TestCase;
use TypeError;

class FizzBuzzTest extends TestCase
{
    /** @test */
    public function it_should_return_exception_when_number_is_negative()
    {
        $this->expectException(InvalidArgumentException::class);

        $negativeNumber = NegativeNumberStub::random();

        (new FizzBuzz($negativeNumber))->execute();
    }

    /** @test */
    public function it_should_return_type_error_exception_when_is_invalid_number()
    {
        $this->expectException(TypeError::class);

        $string = InvalidNumberStub::random();

        (new FizzBuzz($string))->execute();
    }

    /**
     * @test
     * @dataProvider numbersProvider
     * @param $given
     * @param $expected
     */
    public function it_should_return_expected_with_the_number_given($given, $expected)
    {
        $number = Number::create($given);

        $this->assertEquals(
            $expected,
            (new FizzBuzz($number))->execute()
        );
    }

    public function numbersProvider()
    {
        return [
            [1, 1], [2, 2], [3, 'Fizz'],
            [4, 4], [5, 'Buzz'], [6, 'Fizz'],
            [7, 7], [8, 8], [9, 'Fizz'],
            [10, 'Buzz'], [12, 'Fizz'], [15, 'FizzBuzz'],
            [16, 16], [17, 17], [18, 'Fizz'],
            [19, 19], [20, 'Buzz'], [21, 'Fizz']
        ];
    }
}