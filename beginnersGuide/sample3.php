<?php
$bloodType = "AC";  // 血液型
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
        switch($bloodType){
            case "A":
                echo "あなたは几帳面ですね";
            break;

            case "B":
                echo "あなたは自由奔放ですね";
            break;

            case "AB":
                echo "あなたは複雑な人ですね";
            break;

            case "O":
                echo "あなたは大物ですね";
            break;

            default:
            echo"あなたは人間じゃないです";

        }

        ?>
        
    </div>
</body>
</html>