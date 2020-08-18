<?php
$result = "";
$lines = @file("readingText.txt") or $result = "ファイルが読めません。";

if ($lines != null){
    for($i = 0; $i < count($lines); $i++){
        $result .= ($i + 1) . ":" . $lines[$i] . "<br>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello PHP</h1>
    <p>
        <?php echo $result; ?>
    </p>
</body>
</html>