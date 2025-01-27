<?php

//From an Array of Integers
//Return the Integer that appears an Odd Number of Times

use PHPUnit\Framework\TestCase;

require './src/01_find_the_odd_int.php';

class BasicTestCases extends TestCase
{
    public function testFindItReturnsValueAppearingOddNumberOfTimes()
    {
        $this->assertEquals(5, findIt([20, 1, -1, 2, -2, 3, 3, 5, 5, 1, 2, 4, 20, 4, -1, -2, 5]));
        $this->assertEquals(-1, findIt([1, 1, 2, -2, 5, 2, 4, 4, -1, -2, 5]));
        $this->assertEquals(5, findIt([20, 1, 1, 2, 2, 3, 3, 5, 5, 4, 20, 4, 5]));
        $this->assertEquals(10, findIt([10]));
        $this->assertEquals(10, findIt([1, 1, 1, 1, 1, 1, 10, 1, 1, 1, 1]));
    }
}
