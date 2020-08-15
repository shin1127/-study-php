<?php

function fzbz($n){
    if ($n % 15 == 0){
        echo("FizzBuzz ");
    } 
    else if($n % 5 == 0){
        echo("Buzz ");
    }
    else if ($n % 3 == 0){
        echo("Fizz ");
    }
    else{
        echo($n . " ");
    }
}

for ($i = 1; $i <= 100; $i++){
    fzbz($i);
}

?>
