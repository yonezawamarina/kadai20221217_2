

<?php
function h($str)
{
  return htmlspecialchars($str, ENT_QUOTES);//dbの中に入ることは問題なくHTMLで表示されるのを防ぐためにやる
}

//2. DB接続のおまじない
try {
  //ID:'root', Password: xamppは 空白 ''
  $pdo = new PDO('mysql:dbname=kadai_20221217;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}


//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table;");
$status = $stmt->execute();

//３．データ表示
$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //elseの中はSQL実行成功した場合
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php

  while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
  //   $view .= '<p>' . $result['id'] . ' : ' . h($result['food']) . ' / ' 
  //   . h($result['weight']). ' / ' . h($result['walk']) . ' / ' 
   
  //  . h($result['cdt']). ' / ' . h($result['cmt']) . ' / ' . h($result['date']).'</p>';
// $a = $result['id'];
$item= $result['item'];
$type = $result['type'];
$num = $result['num'];
$price = $result['price'];
$itemurl = $result['itemurl'];
$date= $result['date'];



$view.="
<tr>
<th>$date</th>
<th>$item</th> 
<th>$type</th>
<th>$num</th>
<th>$price</th>
<th>$itemurl</th>
</tr>
";

//消さない
}
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>表示</title>
<link rel="stylesheet" href="./css/select.css">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <!-- <a class="navbar-brand" href="index.php">データ登録</a> -->
</header>

<table border="1" class="table">
    <!-- <th>id</th> -->
    <th>日付</th>
    <th>購入品</th>
    <th>項目</th>
    <th>数量</th>
    <th>値段</th> 
    <th>商品URL</th>
  
<?= $view ?></table>  <!-- 26行目のview -->    
<button class="btnall"  onclick="location.href='index.php'">top</button>

</body>
</html>