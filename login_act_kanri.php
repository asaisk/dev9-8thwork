<?php
session_start();

//0.外部ファイル読み込み
include("functions.php");

//1.  DB接続します
$pdo = db_con();

//2. データ登録SQL作成
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];
// $name = $_POST["name"];
 $kanri_flg = $_POST["kanri_flg"];
// $life_flg = $_POST["life_flg"];
// $id = $_POST["id"];

$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE lid=:lid AND life_flg=0 AND kanri_flg=1 AND lpw=:lpw");
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);
// $stmt->bindValue(':kanri_flg', $kanri_flg, PDO::PARAM_INT);
//  $stmt->bindValue(':name', $name, PDO::PARAM_STR);
//  $stmt->bindValue(':life_flg', $life_flg, PDO::PARAM_INT);
//  $stmt->bindValue(':id', $id, PDO::PARAM_INT);

$res = $stmt->execute();

//3. SQL実行時にエラーがある場合
if($res==false){
    queryError($stmt);
}

//4. 抽出データ数を取得
//$count = $stmt->fetchColumn(); //SELECT COUNT(*)で使用可能()
$val = $stmt->fetch(); //1レコードだけ取得する方法 1行分取得する

//5. 該当レコードがあればSESSIONに値を代入
 if($val["id"] != "" && $val["kanri_flg"]=1){
    $_SESSION["chk_ssid"]  = session_id();
    $_SESSION["kanri_flg"] = $val['kanri_flg'];
    $_SESSION["name"]      = $val['name'];
    $_SESSION["lpw"]      = $val['lpw'];
    $_SESSION["lid"]      = $val['lid'];
    header("Location: select_kanri.php");
   
    // if($val["id"] != "" && $_SESSION["kanri_flg"]=1){
    
//  }else if($val["id"] != "" && $_SESSION["kanri_flg"]=0){
//     $_SESSION["chk_ssid"]  = session_id();
//     $_SESSION["kanri_flg"] = $val['kanri_flg'];
//     $_SESSION["name"]      = $val['name'];
//      $_SESSION["lpw"]      = $val['lpw'];
//      $_SESSION["lid"]      = $val['lid'];
//     header("Location: select.php");
  //logout処理を経由して全画面へ
   }else{
     header("Location: login_kanri.php");
}

exit();
?>

