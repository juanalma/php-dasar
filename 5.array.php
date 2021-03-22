<?php 

$values = array(1, 2, 3);
var_dump($values);

$nama = ['juan', 'aldila', 'kampret'];
echo "<br>";
var_dump($nama);
echo "<br>";

unset($nama[2]);
var_dump($nama);

$nama[] = "Alma";

echo "<br>";
var_dump($nama);

echo "<br>";
var_dump(count($nama));



// array sebagai map
$juan = array(
    'id' => 1,
    'nama' => 'Juan Alma' 
);

$aldila = array(
    'id' => 2,
    'nama' => 'Aldila Elfana'
);

var_dump($aldila['id']);

// array di dalam array
$elfana = array(
    'id'  => 3,
    'nama'  => 'Elfana Fauziza',
    'address' => array(
        'country' => 'Indonesia',
        'city'   => 'Semarang'
    )
);