<?php

namespace PHPKatas\FizzBuzzTest\Dependencies;

use Faker\Factory;
use PHPKatas\FizzBuzz\Number;

class NegativeNumberStub
{
    public static function random()
    {
        return Number::create(
            Factory::create()->numberBetween(-200, -1)
        );
    }
}