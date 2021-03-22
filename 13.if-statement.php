<?php
$nilai = 90;
// if else statement
if($nilai < 90){
    echo "Anda tidak luluss!!";
    echo "<br>";
}else {
    echo "Anda luluss!!";
    echo "<br>";
}
// alternatif
if($nilai < 90):
    echo "Anda tidak lulus";
else:
    echo "Anda lulus";
endif;