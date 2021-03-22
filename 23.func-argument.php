<?php

function sayHello($name = "Anonymous"){
    echo "Hai ".$name;
}

// dengan default argument
sayHello();
echo "<br>";
sayHello('juan');
