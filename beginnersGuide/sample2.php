<?php
$n = 12345;
$amari = $n % 2;
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
            if ($amari == 0){
                echo($n . "は、偶数です");
            }
            else{
                echo($n . "は、奇数です");
            }
        ?>
        
    </div>
</body>
</html>