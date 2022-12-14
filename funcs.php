
<?php 
//共通に使う関数を記述

function db_connect(){
    try {
        //localhostの時はこれ。さくらの場合さくらのデータベースをいれる
        //Password:MAMP='root',XAMPP=''
        $pdo = new PDO('mysql:dbname=chart1;charset=utf8;host=localhost','root','root');
      } catch (PDOException $e) {//$eにエラー内容が入っている。
        exit('DBConnectError:'.$e->getMessage());//ここのDBConnectErrorはエラー時の文字表示の為、ここはなんでも良い。この項目２は基本idとpass以外コピペで覚えればOK
      }
    return $pdo;//※重要！！※ ここでリターンすることで他の項目でも使用している変数($pdo)を関数の外でも使用できるようにしている
}

?>