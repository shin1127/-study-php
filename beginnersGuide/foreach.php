<?php
$total = 0;
$ary = array(100, 200, 300, 400);

foreach ($ary as $i){
    $total += $i;
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
        echo ("合計:". $total);

        ?>
        
    </div>
</body>
</html>