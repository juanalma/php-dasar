<?php 

function sayHello(){
    echo "Hello friends";
}

sayHello();

$bool = false;

if($bool){
    function hi(){
        echo "Hi.";
    }
}

hi();