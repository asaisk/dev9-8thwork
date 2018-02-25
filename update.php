<?php
//入力チェック(受信確認処理追加)
if(
  !isset($_POST["id"]) || $_POST["id"]=="" ||
  !isset($_POST["date"]) || $_POST["date"]=="" ||
  !isset($_POST["name"]) || $_POST["name"]=="" ||
  !isset($_POST["spec"]) || $_POST["spec"]=="" ||
  !isset($_POST["subject"]) || $_POST["subject"]=="" ||
  !isset($_POST["link"]) || $_POST["link"]=="" ||
  !isset($_POST["source"]) || $_POST["source"]==""


){
  exit('ParamError');
}

//1. POSTデータ取得
$id = $_POST["id"];
$date = $_POST["date"];
$name = $_POST["name"];
$spec = $_POST["spec"];
$subject = $_POST["subject"];
$source = $_POST["source"];
$source = $_POST["link"];



//2. DB接続します(エラー処理追加)
try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成
$stmt = $pdo->prepare("UPDATE gs_code_table SET date=:date,name=:name,spec=:spec,subject=:subject,source=:source WHERE id=:id");
$stmt->bindValue(':id', $id,PDO::PARAM_INT);
$stmt->bindValue(':date', $date,PDO::PARAM_STR);
$stmt->bindValue(':name', $name,PDO::PARAM_STR);
$stmt->bindValue(':spec', $spec,PDO::PARAM_STR);
$stmt->bindValue(':subject',$subject,PDO::PARAM_STR);
$stmt->bindValue(':source',$source,PDO::PARAM_STR);
$stmt->bindValue(':link',$link,PDO::PARAM_STR);

$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: select.php");
  exit;
}
?>

