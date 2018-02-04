<?php
//入力チェック(受信確認処理追加)
if(
  !isset($_POST["id"]) || $_POST["id"]=="" ||
  !isset($_POST["date"]) || $_POST["date"]=="" ||
  !isset($_POST["name"]) || $_POST["name"]=="" ||
  !isset($_POST["place"]) || $_POST["place"]=="" ||
  !isset($_POST["distance"]) || $_POST["distance"]=="" ||
  !isset($_POST["comment"]) || $_POST["comment"]==""


){
  exit('ParamError');
}

//1. POSTデータ取得
$id = $_POST["id"];
$date = $_POST["date"];
$name = $_POST["name"];
$place = $_POST["place"];
$distance = $_POST["distance"];
$comment = $_POST["comment"];




//2. DB接続します(エラー処理追加)
try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成
$stmt = $pdo->prepare("UPDATE gs_bm_table SET date=:date,name=:name,place=:place,distance=:distance,comment=:comment WHERE id=:id");
$stmt->bindValue(':id', $id,PDO::PARAM_INT);
$stmt->bindValue(':date', $date,PDO::PARAM_STR);
$stmt->bindValue(':name', $name,PDO::PARAM_STR);
$stmt->bindValue(':place', $place,PDO::PARAM_STR);
$stmt->bindValue(':distance',$distance,PDO::PARAM_INT);
$stmt->bindValue(':comment',$comment,PDO::PARAM_STR);


$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: select_1.php");
  exit;
}
?>

