<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class SubtractionTest extends TestCase
{
    public function testSubtractPositiveNumbers()
    {
        $calculator = new Calculator();
        $this->assertEquals(2, $calculator->subtract(5, 3));
    }

    public function testSubtractNegativeResult()
    {
        $calculator = new Calculator();
        $this->assertEquals(-2, $calculator->subtract(3, 5));
    }
}
