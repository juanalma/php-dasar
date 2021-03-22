<?php

// assign by reference
$name = "Tom";
$otherName = &$name;
$otherName = "Jerry";
echo $name;

// pass by reference
function increment(&$value){
    $value++;
}

$counter = 1;
increment($counter);
echo $counter;

// returning reference
function &getValue(){
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b;
