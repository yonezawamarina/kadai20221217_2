<?php
//1. POSTデータ取得
$item = $_POST['item'];
$type = $_POST['type'];
$num = $_POST['num'];
$price = $_POST['price'];
$url = $_POST['itemurl'];


//2. DB接続のおまじない
try {
  //ID:'root', Password: xamppは 空白 ''
  $pdo = new PDO('mysql:dbname=kadai_20221217;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成

// (1). SQL文を用意
$stmt = $pdo->prepare("INSERT INTO
                        gs_bm_table(id, item, type, num, price, itemurl, date)
                        VALUES(NULL, :item, :type, :num, :price, :itemurl, sysdate() )");


//(2). バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR
$stmt->bindValue(':item', $item, PDO::PARAM_STR);
$stmt->bindValue(':type', $type, PDO::PARAM_STR);
$stmt->bindValue(':num', $num, PDO::PARAM_STR);
$stmt->bindValue(':price', $price, PDO::PARAM_STR);
$stmt->bindValue(':itemurl', $url, PDO::PARAM_STR);


//  (3). 実行
$status = $stmt->execute();


//４．データ登録処理後
if ($status === false) {
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
} else {
  //５．index.phpへリダイレクト
  header('Location: index.php');
}

















?>