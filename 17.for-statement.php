<?php

// init statement
for($i=1; $i<=10;){
    echo $i;
    $i++;
}

// post statement
for($i=1; $i<=10; $i++){
    echo $i;
}

//alternative
for($i=1; $i<=10; $i++) :
    echo $i;
endfor;