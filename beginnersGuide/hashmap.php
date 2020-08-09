<?php
$total = 0;
$kyouka = "";
$ary = array(
    "国語" => 98,
    "算数" => 76,
    "理科" => 54,
    "社会" => 56,
    "英語" => 78,
);

foreach ($ary as $k => $n){
    $total += $n;
    $kyouka .= $k . " ";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample page</title>
</head>
<body>
    <h1>hello PHP!</h1>
    <div>
        <?php
        echo ($total);
        ?>
        
        <div>
        <?php
        echo($kyouka);

        ?>
        
    </div>
</body>