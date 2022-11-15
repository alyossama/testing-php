<?php

require "./src/Factorial.php";

use PHPUnit\Framework\TestCase;

class FactorialTest extends TestCase
{
    public function testFactorialCalculator()
    {
        // Instance of Factorial class
        $f = new Factorial;

        // n = 0
        $factorialResult = $f->factorialCalculator(0);
        $this->assertEquals(1, $factorialResult);

        // n = 1
        $factorialResult = $f->factorialCalculator(1);
        $this->assertEquals(1, $factorialResult);

        // n = 5
        $factorialResult = $f->factorialCalculator(5);
        $this->assertEquals(120, $factorialResult);

        // n = -3
        $factorialResult = $f->factorialCalculator(-3);
        $this->assertEquals(null, $factorialResult);

        // n = 1.5
        $factorialResult = $f->factorialCalculator(1.5);
        $this->assertEquals(null, $factorialResult);

        // n = false
        $factorialResult = $f->factorialCalculator(false);
        $this->assertEquals(null, $factorialResult);

        // n = abc
        $factorialResult = $f->factorialCalculator('abc');
        $this->assertEquals(null, $factorialResult);
    }
}
