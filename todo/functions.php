<?php
function db_connect(){



    try{
        $dsn =
        "mysql:dbname=todolist;host=localhost;charset=utf8";
        $user = "root";
        $password = "1234";
    
        $dbh = new PDO($dsn, $user, $password);  // PDO: DB接続をするためのクラス
        $dbh->query("SET NAMES utf8");  // DB接続時の文字化けを解消する, -> はプロパティへのアクセス、メソッドの呼び出し
    
        $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);  // https://www.php.net/manual/ja/pdo.setattribute.php
        // プリベアドステートメント→サニタイズ；無害化する仕組みを適用する何か
    
        return $dbh;
        
        }catch (PDOException $e){
            print "エラー: " . $e->getMessage() . "<br>";
            die();
        }
}
