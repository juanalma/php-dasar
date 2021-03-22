<?php
$array = [1, 2, 3, 4, 5];

var_dump(array_keys($array));
echo "<br>";
var_dump(array_values($array));
echo "<br>";
var_dump(array_map(fn($array) => $array * 2, $array));
echo "<br>";
