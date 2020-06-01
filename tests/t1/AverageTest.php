<?php

use drmonkeyninja\Average;
use PHPUnit\Framework\TestCase;

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
