<?php

// クラスの中身はどうやって調べるんだ？

// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";

if(isset($_POST["submit"])){  // $_POSTにsubmitが存在するか？

    $name = $_POST["name"];
    $name = htmlspecialchars($name, ENT_QUOTES);  // SQLインジェクション対策の関数

    $dsn =
    "mysql:dbname=todolist;host=localhost;charset=utf8";
    $user = "root";
    $password = "1234";

    $dbh = new PDO($dsn, $user, $password);  // PDO: DB接続をするためのクラス
    $dbh->query("SET NAMES utf8");  // DB接続時の文字化けを解消する, -> はプロパティへのアクセス、メソッドの呼び出し

    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);  // https://www.php.net/manual/ja/pdo.setattribute.php

    $sql = "insert into tasks (name, done) values (?, 0)";  // SQLインジェクション対策のプレースホルダ(=?)
    $stmt = $dbh->prepare($sql);

    $stmt->bindValue(1, $name, PDO::PARAM_STR);  // たぶん$sqlの第一引数"name"に"$name"が対応してる SQLに値をバインド（挿入？）する

    // PDO::PARAM_STRについて http://blog.a-way-out.net/blog/2013/12/18/pdo-prepare-statement-numeric-literal-part2/

    $stmt->execute();

    $dbh = null;

    unset($name);

    
}
// echo($dbh);
// get_class_vars(string $dbh):array;
var_dump($dbh);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todoリスト</title>
</head>
<body>
    <h1>Todoリスト</h1>
    <form action="index.php" method="post">
        <ul>
            <li><span>タスク名</span><input type="text" name="name">
        </li>
        <li>
        <input type="submit" name="submit">
        </li>
        </ul>
    </form>
    
</body>
</html>
