<?php

class Factorial
{
    public function factorialCalculator($n)
    {
        $result = 1;
        if ($n === 0) {
            return $result;
        } elseif ($n < 0 || !is_int($n) || $n == false) {
            return null;
        } else {
            for ($i = $n; $i > 0; $i--) {
                $result *= $i;
            }
            return $result;
        }
    }
}
// $f = new Factorial;
// $result = $f->factorialCalculator(false);
// echo $result;
