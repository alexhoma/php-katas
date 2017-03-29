<?php

namespace PHPKatas\FizzBuzz;

use InvalidArgumentException;

class Number
{
    const MIN_VALID_NUMBER = 0;

    private $number;

    private function __construct(int $number)
    {
        $this->setNumber($number);
    }

    private function setNumber(int $number)
    {
        $this->checkIsValidNumber($number);
        $this->number = $number;
    }

    public static function create(int $number): self
    {
        return new self($number);
    }

    /** @throws InvalidArgumentException */
    private function checkIsValidNumber(int $number)
    {
        if ($this->isNegative($number)) {
            throw new InvalidArgumentException('Number can not be negative.');
        }
    }

    private function isNegative(int $number): bool
    {
        return $number < self::MIN_VALID_NUMBER;
    }

    public function get()
    {
        return (integer) $this->number;
    }
}