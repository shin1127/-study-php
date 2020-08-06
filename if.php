<?php

var_dump(4 < 5);

var_dump("apple" == "apple");

var_dump("年齢を入力せよ");

$age = trim( fgets(STDIN));
if ($age < 20){
    var_dump("20歳未満");
}
else{
    var_dump("20歳以上");
}

?>