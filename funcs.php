




<?php 
//2. DB接続のおまじない

function db_connect(){
try {
  //ID:'root', Password: xamppは 空白 ''
  $pdo = new PDO('mysql:dbname=kadai_20221217;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}
return $pdo;//※重要！！※ ここでリターンすることで他の項目でも使用している変数($pdo)を関数の外でも使用できるようにしている
}
?>