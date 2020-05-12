<?php

namespace drmonkeyninja;

class Sum
{
    /**
     * Calculate the sum
     * @param array $numbers Array of numbers
     * @return float sum 
     */
    public function sum(array $numbers)
    {
        return array_sum($numbers) ;
    }

}
