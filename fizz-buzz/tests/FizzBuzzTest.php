<?php

namespace PHPKatas\FizzBuzzTest;

use InvalidArgumentException;
use PHPKatas\FizzBuzz\FizzBuzz;
use PHPKatas\FizzBuzz\Number;
use PHPUnit\Framework\TestCase;
use TypeError;

class FizzBuzzTest extends TestCase
{
    /** @test */
    public function it_should_return_exception_when_number_is_negative()
    {
        $this->expectException(InvalidArgumentException::class);

        $negativeNumber = Number::create(-1);

        (new FizzBuzz($negativeNumber))
            ->execute();
    }

    /** @test */
    public function it_should_return_type_error_exception_when_is_string()
    {
        $this->expectException(TypeError::class);

        $string = Number::create('I am a string');

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
            (new FizzBuzz($number))
                ->execute()
        );
    }

    public function numbersProvider()
    {
        return [
            [1, 1], [2, 2], [3, 'Fizz'],
            [4, 4], [5, 'Buzz'], [6, 'Fizz'],
            [7, 7], [8, 8], [9, 'Fizz'],
            [10, 'Buzz'], [12, 'Fizz'], [15, 'FizzBuzz']
        ];
    }
}