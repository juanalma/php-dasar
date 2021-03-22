<?php

$sayHello = function($name){
    echo "Hello {$name}";
};

$sayHello("Juan");

echo "<br>";
// anonymouse function sebagai argument
function printAllName($firstname, $lastname, $func){
    $fullName = $func($firstname, $lastname);
    echo $fullName;
}

printAllName('Juan', 'Alma', function($firstname, $lastname){
    return $firstname." ".$lastname;
});

echo "<br>";
// Mengakses variable luar
$firstname = "Tom";
$lastname = "Jerry";

$printFullName = function () use ($firstname, $lastname){
    echo $firstname." ".$lastname;
};

$printFullName();