<?php

namespace PHPKatas\FizzBuzzTest;

use InvalidArgumentException;
use PHPKatas\FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;
use TypeError;

class FizzBuzzTest extends TestCase
{
    /** @test */
    public function it_should_return_exception_when_number_is_negative()
    {
        $this->expectException(InvalidArgumentException::class);

        (new FizzBuzz())->execute(-1);
    }

    /** @test */
    public function it_should_return_type_error_exception_when_is_string()
    {
        $this->expectException(TypeError::class);

        (new FizzBuzz())->execute('I am a string');
    }

    /**
     * @test
     * @dataProvider numbersProvider
     * @param $given
     * @param $expected
     */
    public function it_should_return_1_when_number_is_1($given, $expected)
    {
        $this->assertEquals(
            $expected,
            (new FizzBuzz())->execute($given)
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