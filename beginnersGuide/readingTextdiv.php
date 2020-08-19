<?php
$result = "";
$lines = @file("readingTextdiv.txt") or $result = "ファイルが読めません。";

if ($lines != null){
    $result = '<table border="0">';
    $result .= "<tr><th>NAME</th><th>MAIL</th><th>TEL</th></tr>";
    for ($i = 0; $i < count($lines); $i++){
        $result .= "<tr>";
        $arr = explode(",", $lines[$i]);
        for($j = 0; $j < 3; $j++){
            $result .= "<td>{$arr[$j]}</td>";
        }
        $result .= "</tr>";
    }
    $result .= "</table>";
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