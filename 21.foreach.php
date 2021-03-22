<?php 

$names = ["Juan", "Aldila", "Elfana"];

foreach($names as $name){
    echo $name;
    echo "<br>";
}
echo "<br>";

$fullName = [
    'firstname' => 'Juan',
    'middle_name' => 'Angela',
    'lastname' => 'Alma'
];

foreach($fullName as $key => $value){
    echo $key." : ".$value;
    echo "<br>";
}

