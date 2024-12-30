<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class MultiplicationTest extends TestCase
{
    public function testMultiplyPositiveNumbers()
    {
        $calculator = new Calculator();
        $this->assertEquals(15, $calculator->multiply(3, 5));
    }

    public function testMultiplyByZero()
    {
        $calculator = new Calculator();
        $this->assertEquals(0, $calculator->multiply(5, 0));
    }
}
