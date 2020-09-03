<?php

require_once("functions.php");

if(isset($_POST["submit"])){  // $_POSTにsubmitが存在するか？

    $name = $_POST["name"];
    $name = htmlspecialchars($name, ENT_QUOTES);  // SQLインジェクション対策の関数

    $dbh = db_connect();

    $sql = "insert into tasks (name, done) values (?, 0)";  // SQLインジェクション対策のプレースホルダ(=?)
    $stmt = $dbh->prepare($sql);

    $stmt->bindValue(1, $name, PDO::PARAM_STR);
    $stmt->execute();

    $dbh = null;
    unset($name);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO by PHP</title>
</head>
<body>
    <h1>todo by PHP</h1>
    <h2>やること</h2>

    <form action="index.php" method="post">
    <div>タスク名</div>
    <input type="text" name="name">

    <button type="submit" name="submit">追加</button>
    </form>

    <br>

<?php

$dbh = db_connect();

$sql = "select id, name from phptodo where done = 0 order by id desc;";

$stmt = $dbh->query($sql);
$stmt->execute();


while($task = $stmt->fetch(PDO::FETCH_ASSOC)){

    print "<br>";
    print $task["name"];
};


?>
    

    
</body>
</html>
