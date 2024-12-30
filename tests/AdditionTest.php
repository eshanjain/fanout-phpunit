<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class AdditionTest extends TestCase
{
    public function testAddPositiveNumbers()
    {
        $calculator = new Calculator();
        $this->assertEquals(5, $calculator->add(2, 3));
    }

    public function testAddNegativeNumbers()
    {
        $calculator = new Calculator();
        $this->assertEquals(-5, $calculator->add(-2, -3));
    }
}
