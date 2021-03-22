<?php
$nilai = 'A';

switch($nilai){
    case 'A':
        echo 'Anda lulus dengan sangat baik';
        break;
    case 'B':
        echo 'Anda lulus';
        break;
    case 'C':
        echo 'Anda tidak lulus';
        break;
}

echo "<br>";

// alternative 
switch($nilai) :
    case 'A':
        echo 'Anda lulus dengan sangat baik';
        break;
    case 'B':
        echo 'Anda lulus';
        break;
    case 'C':
        echo 'Anda tidak lulus';
        break;
endswitch;
