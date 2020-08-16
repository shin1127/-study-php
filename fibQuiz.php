<?php

// フィボナッチ数列のうち、 各桁の数字を足した数で割り切れる数を、 以下の例に続けて小さい 方から5個求めてください。
// 例） 
// 2 　 → 　 2 ÷ 2 
// 3 　 → 　 3 ÷ 3 
// 5 　 → 　 5 ÷ 5 
// 8 　 → 　 8 ÷ 8 
// 21 　 → 　 21 ÷ 3 　… 2 ＋ 1 ＝ 3 で 割る 
// 144 　 → 　 144 ÷ 9 　… 1 ＋ 4 ＋ 4 ＝ 9 で 割る

// 出典『増井敏克. プログラマ脳を鍛える数学パズル シンプルで高速なコードが書けるようになる70問 』


$fbnList = array(1,1);
$correctCount = 0;
$maxResult = 10;
$fbn = $fbnList[count($fbnList) - 1] + $fbnList[count($fbnList) - 2];
$correct = array();

while ($correctCount <= $maxResult){
    $fbn = $fbnList[count($fbnList) - 1] + $fbnList[count($fbnList) - 2];

    $divisor1 = str_split($fbn);
    array_push($fbnList, $fbn);    
    
    $divisor2 = 0;
    foreach($divisor1 as $s){
        $divisor2 += $s;
    }
    
    if ($fbn % $divisor2 == 0){
        $correctCount += 1;
        array_push($correct, $fbn);
        
    }
}

foreach($correct as $n){
    
    echo($n . " ");
}

?>
