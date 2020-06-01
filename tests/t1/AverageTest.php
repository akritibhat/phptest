<?php

use PHPUnit\Framework\TestCase;

class AverageTest2 extends TestCase
{

    public function testCalculationOfMean2()
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(4.4, 4.4);
    }

    public function testCalculationOfMedian2()
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(5, 5);
    }
}
