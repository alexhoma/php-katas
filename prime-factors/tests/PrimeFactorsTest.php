<?php

namespace PHPKatas\PrimeFactorsTest;

use PHPKatas\PrimeFactors\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    /** @var PrimeFactors */
    private $primeFactors;

    public function setUp()
    {
        parent::setUp();

        $this->primeFactors = new PrimeFactors();
    }

    /** @test */
    public function it_should_return_empty_array_when_number_is_1_or_less()
    {
        $this->assertEmpty($this->primeFactors->generate(1));
    }
    
    /** @test */
    public function it_should_return_2_when_number_is_2()
    {
        $this->assertEquals([2], $this->primeFactors->generate(2));
    }

    /** @test */
    public function it_should_return_3_when_number_is_3()
    {
        $this->assertEquals([3], $this->primeFactors->generate(3));
    }

    /** @test */
    public function it_should_return_2_2_when_number_is_4()
    {
        $this->assertEquals([2,2], $this->primeFactors->generate(4));
    }

    /** @test */
    public function it_should_return_5_when_number_is_5()
    {
        $this->assertEquals([5], $this->primeFactors->generate(5));
    }

    /** @test */
    public function it_should_return_2_3_when_number_is_6()
    {
        $this->assertEquals([2, 3], $this->primeFactors->generate(6));
    }
}