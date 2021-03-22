<?php

function factorialRecursion(int $number): int
{
    if($number == 1){
        return 1;
    }else {
        return $number * factorialRecursion($number-1);
    }
}

echo factorialRecursion(4);