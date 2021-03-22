<?php

function sayHello(string $name, callable $filter){
    $finalName = call_user_func($filter, $name);
    echo "Hello {$finalName}"."<br>";
}

sayHello("Juan", function($name){ return strtoupper($name); });
sayHello("Aldila", fn($name) => strtoupper($name));
sayHello("Tom", "strtoupper");
sayHello("Jerry", "strtolower");


function sum(callable $func, ...$numbers){
    $total = 0;
    foreach($numbers as $number){
        $total = call_user_func($func,$number, $total);
    }
    echo "Total : {$total}";
}

sum(function ($number, $total) {
    return $total + $number;
}, 12, 11, 12, 01, 45);