<?php
//入力チェック(受信確認処理追加)
include("functions.php");
// $id = $_GET["id"];

if($_SERVER["REQUEST_METHOD"]=="POST"){



if(
  !isset($_POST["date"]) || $_POST["date"]=="" ||
  !isset($_POST["name"]) || $_POST["name"]=="" ||
  !isset($_POST["place"]) || $_POST["place"]=="" ||
  !isset($_POST["distance"]) || $_POST["distance"]=="" ||
  !isset($_POST["comment"]) || $_POST["comment"]==""
){
  exit('ParamError');
}

//1. POSTデータ取得
$date   = $_POST["date"];
$name  = $_POST["name"];
$place = $_POST["place"];
$distance = $_POST["distance"];
$comment = $_POST["comment"];



//2. DB接続します(エラー処理追加)
// try {
//   $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
// } catch (PDOException $e) {
//   exit('DbConnectError:'.$e->getMessage());
// }
$pdo=db_con();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(id, date, name, place,
distance,comment,time )VALUES(NULL, :a1, :a2, :a3, :a4, :a5,sysdate())");
$stmt->bindValue(':a1', $date);
$stmt->bindValue(':a2', $name);
$stmt->bindValue(':a3', $place);
$stmt->bindValue(':a4', $distance);
$stmt->bindValue(':a5', $comment);

$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  error_db_Info($stmt);   
}else{
  //５．index.phpへリダイレクト
  header("Location: index.php");
  exit;
}
}else{ exit();} 

?>


