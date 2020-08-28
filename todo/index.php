<?php

require_once("functions.php");

// クラスの中身はどうやって調べるんだ？

// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";

if(isset($_POST["submit"])){  // $_POSTにsubmitが存在するか？

    $name = $_POST["name"];
    $name = htmlspecialchars($name, ENT_QUOTES);  // SQLインジェクション対策の関数

    $dbh = db_connect();


    $sql = "insert into tasks (name, done) values (?, 0)";  // SQLインジェクション対策のプレースホルダ(=?)
    $stmt = $dbh->prepare($sql);

    $stmt->bindValue(1, $name, PDO::PARAM_STR);  // たぶん$sqlの第一引数"name"に"$name"が対応してる SQLに値をバインド（挿入？）する

    // staticメソッド→::　インスタンス化してアクセスするとき→ ->
    // PDO::PARAM_STRについて http://blog.a-way-out.net/blog/2013/12/18/pdo-prepare-statement-numeric-literal-part2/
    // "SQL CHAR, VARCHAR, または他の文字列データ型を表します。" by 公式リファレンス

    $stmt->execute();

    $dbh = null;

    unset($name);
}
// echo($dbh);
// get_class_vars(string $dbh):array;
// var_dump($dbh);


if (isset($_POST["method"]) && ($_POST["method"]=== "put")){
    $id = $_POST["id"];
    $id = htmlspecialchars($id, ENT_QUOTES);
    $id = (int)$id;  // キャスト

    $dbh = db_connect();

    $sql = "update tasks set done = 1 where id = ?";
    $stmt = $dbh->prepare($sql);

    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    $stmt->execute();

    $dbh = null;
}

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

<ul>

<?php
$dbh = db_connect();

$sql = "select id, name from tasks where done = 0 order by id desc;";

// $stmt = $dbh->prepare($sql);
$stmt = $dbh->query($sql);  // ユーザーからの入力がないSQLはqueryメソッドでもよい
// cf: https://se-tomo.com/2018/07/12/php%E3%81%AEquery%E3%81%A8prepare%E3%81%AE%E9%81%95%E3%81%84/

$stmt->execute();
$dbh = null;

while($task = $stmt->fetch(PDO::FETCH_ASSOC)){  // DBの次の行を取得する、取得できなければfalseが返る
    // 連想配列の形でフィールドを取得

    print "<li>";
    print $task["name"];

    print '
    <form action="index.php" method="post">
    <input type="hidden" name="method" value="put">
    <input type="hidden" name="id" value="' . $task['id'] . '">
    <button type="submit">済んだ</button>
    </form>
    ';
    
}
?>
</body>
</html>
