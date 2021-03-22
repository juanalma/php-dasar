<?php

// variable global
$name = "Tom";

// tidak dapat diakses di dalam function
function sayHello(){
    // berikan keyword global agar dapat diakses di function
    global $name; // atau bisa juga menggunalan $GLOBALS['name']
    echo $name;
}

sayHello();


function hello(){
    $name2 = "Jerry"; // variable local scope
    // hanya bisa diakses di dalam fungsi
}

hello();
echo $name2; // error

