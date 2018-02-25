<?php
//入力チェック(受信確認処理追加)
include("functions.php");
// $id = $_GET["id"];

if($_SERVER["REQUEST_METHOD"]=="POST"){



if(
  // !isset($_POST["date"]) || $_POST["date"]=="" ||
  // !isset($_POST["name"]) || $_POST["name"]=="" ||
  !isset($_POST["spec"]) || $_POST["spec"]=="" ||
  !isset($_POST["subject"]) || $_POST["subject"]=="" ||
  !isset($_POST["source"]) || $_POST["source"]=="" ||
  !isset($_POST["link"]) || $_POST["link"]==""
  ){
  exit('ParamError');
}

//1. POSTデータ取得
// $date   = $_POST["date"];
$name  = $_POST["name"];
$spec = $_POST["spec"];
$subject = $_POST["subject"];
$source = $_POST["source"];
$link = $_POST["link"];

//2. DB接続します(エラー処理追加)

$pdo=db_con();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_code_table (id, date, name, spec,subject,source,link) VALUES(NULL,sysdate(), :a1, :a2, :a3, :a4,:a5)");
// $stmt->bindValue(':a1', $date);
$stmt->bindValue(':a1', $name);
$stmt->bindValue(':a2', $spec);
$stmt->bindValue(':a3', $subject);
$stmt->bindValue(':a4', $source);
$stmt->bindValue(':a5', $link);
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


