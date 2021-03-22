<?php

function increment(){
    static $counter = 1;

    echo "Cointer : $counter";
    $counter++;
    echo "<br>";
}

increment();
increment();
increment();