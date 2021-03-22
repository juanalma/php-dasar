<?php
function sum($n1, $n2){
    return $n1+$n2;
}

var_dump(sum(12, 11));

// Return type declaration
function sumAll(...$values):string // akan menghasilkan return bertipe string
{
    $total = 0;
    foreach($values as $value){
        $total += $value;
    }
    return $total;
}
var_dump(sumAll(12, 11, 11));


