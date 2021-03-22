<?php 


for($i = 1; $i<=10; $i++){
    echo $i;
    if($i == 5){
        break;
    }
}

echo "<br>";

for($j = 1; $j<=10; $j++){
    echo $j;
    if($j == 5){
        continue;
    }
}