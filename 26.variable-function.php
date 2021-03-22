<?php
function sayHello($name){
    echo "Hello {$name}";
}

// variable $say akan menyimpan function sayHello
$say = "sayHello";

$say("Juan");