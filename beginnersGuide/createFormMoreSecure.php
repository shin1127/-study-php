<?php
    if (isset($_POST['text1'])){
        $input = $_POST['text1'];
        $result = "あなたは、「{$input}」と書きました。";
    }else{
        $result = "なにか書いてください。";
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
    <h1>hello world</h1>
    <div><?php echo htmlspecialchars($result); ?></div>
    <form method="post" action="./createForm.php">
    <input type="text" name="text1">
    <input type="submit">
    </form>
</body>
</html>
