<?php

namespace PHPKatas\FizzBuzzTest\Dependencies;

use Faker\Factory;
use PHPKatas\FizzBuzz\Number;

class InvalidNumberStub
{
    public static function random()
    {
        return Number::create(
            Factory::create()->word
        );
    }
}