<?php 

function pengurangan(int $operan1, int $operan2){
    return $operan1 - $operan2;
}

$peng = pengurangan(11, 10);
echo $peng;
// error
// pengurangan("Juan", 11);



// Variable Length List Argument
function sumAll(...$numbers){
    echo "<br>";
    $total = 0;
    foreach($numbers as $number){
        $total += $number;
    }
    echo "Total dari ".implode(" + ", $numbers)." adalah ".$total;
}

sumAll(12, 11, 23, 1, 3, 2, 3);
sumAll(...[12, 22, 12]);
