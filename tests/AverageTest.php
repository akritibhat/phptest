<?php

use PHPUnit\Framework\TestCase;
use src\drmonkeyninja\Average;

class AverageTest2 extends TestCase
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
    
    public function testCalculationOfMean2()
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(4.4, $this->Average->mean($numbers));
        $this->assertEquals(5, 5);
    }

    public function testCalculationOfMedian2()
    {
        $numbers = [3, 7, 6, 19, 5];
        $this->assertEquals(5, $this->Average->median($numbers));
    }
   
    
}
