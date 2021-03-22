<?php
// dot untuk menambahkan string
echo 'Juan'.'Alma';
echo "<br/>";
// konversi ke number
$valueString = (string)100;
var_dump($valueString);
echo "<br/>";
var_dump((int)$valueString);
// akses karakter;
echo "<br/>";
$name = "Juan";
echo $name[0];
// variabel parsing
echo "<br/>";
echo "Nama saya adalah $name";
//curly brace
echo "<br/>";
echo "{$name} adalah anak ke-{$valueString}";
