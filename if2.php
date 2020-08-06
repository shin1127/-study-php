<?php

$a = 20;
echo("input number");
$b = fgets(STDIN);

if ($a > $b){
    echo("a>b");
}
else if($a < $b){
    echo("a<b");
}
else{
    echo("a=b");
}

?>