<?php
if ($_POST != null){
    $set = $_POST["text1"];
    setcookie("mycookie", htmlspecialchars($str),time() + 60 * 1);
    header("Location: ./index.php");
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
    <h1>Hello PHP!</h1>
    <p>
        <?php
        if(isset($_COOKIE["mycookie"])){
        $cookie = $_COOKIE["mycookie"];
        echo "クッキー情報: {$cookie}";
        }
        else{
            echo "NO COOKIE...";
        }
        ?>
    </p>

    <hr>
    <form method="post" action="./cookie.php">
        <input type="text" name="text1">
        <input type="submit" value="move">
    </form>
    <hr>
</body>
</html>