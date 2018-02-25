<?php


//1.  DB接続します

include("functions.php");

// try {
//   $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
// } catch (PDOException $e) {
//   exit('データベースに接続できませんでした。'.$e->getMessage());
// }

$pdo=db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_user_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  // $error = $stmt->errorInfo();
  // exit("ErrorQuery:".$error[2]);
  error_db_Info($stmt); 
}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .='<tr>';
    // $view .='<a href="detail_user.php?id='.$result["id"].'">'; 
    // $view .= $result["date"]."[".$result["date"]."]";
    $view .= '<td><a href="detail_user.php?id='.$result["id"].'">'.$result["name"]."</td>";
    $view .= "<td>".$result["lid"]."</td>";
    $view .= "<td>".$result["lpw"]."</td>";
    $view .= "<td>".$result["kanri_flg"]."</td>";
    $view.=  "<td>".$result["life_flg"]."</td>";
    // $view .= $result["name"]."[".$result["indate"]."]";
    $view .='<td><a href="delete_user.php?id='.$result["id"].'">'.'削除'.'</td>';
   $view .='</tr>';
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ユーザー登録状況</title>
<link rel="stylesheet" href="css/style.css">

<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <!-- <nav class="navbar navbar-default">
    <div class="container-fluid"> -->
      <!-- <div class="navbar-header"> -->
      <button><a href="index_user.php">ユーザー登録</a></button>
      <button><a class="navbar-brand" href="index.php">データ登録</a></button>
      <button><a class="navbar-brand" href="select_kanri.php">管理者用ページ</a></button>

    <!-- </div> -->
  <!-- </nav> -->
</header>
<!-- Head[End] -->

<!-- Main[Start] -->

<table id="table1" border='1' align=center width="1000">
<tr><th>名前</th><th>ID</th><th>パスワード</th><th>管理フラグ：1管理者</th><th>利用フラグ0:使用中</th><th>削除</th></tr>



<div>
    <div class="container jumbotron"><?=$view?></div>
  </div>
</div>
<!-- Main[End] -->

</body>
</html>
