<?php

use drmonkeyninja\Average;
use PHPUnit\Framework\TestCase;

class AverageTest extends TestCase
{
    protected $Average;

    public function setUp()
    {
        $this->Average = new Average();
    }

    public function testCalculationOfMean()
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(4.4, $this->Average->mean($numbers));
    }

    public function testCalculationOfMedian()
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(5, $this->Average->median($numbers));
    }
    
    public function testCalculationOfMean22()
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(4.4, $this->Average->mean($numbers));
    }

    public function testCalculationOfMedian22()
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(5, $this->Average->median($numbers));
    }
}

class AverageTest2 extends TestCase
{
    protected $Average2;

    public function setUp()
    {
        $this->Average2 = new Average();
    }

    public function testCalculationOfMean2()
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(4.4, $this->Average2->mean($numbers));
    }

    public function testCalculationOfMedian2()
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(5, $this->Average2->median($numbers));
    }
}
