<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    
  </body>
  </html>
  
  <table id="table1" border='1' align=center width="1000">
  <tr><th>日付</th><th>名前</th><th>場所</th><th>距離</th><th>コメント</th><th>削除</th></tr>

</html>  

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

$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
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

    
    // $view .='<a href="detail.php?id='.$result["id"].'">';  これは何？
      //  $view .= $result["date"].$result["name"].$result["place"].$result["distance"].$result["comment"];
   

      // $view .= "<td><tr>".$result["date"]."</tr></td>";
      $view .= "<td>".$result["date"]."</td>"; 
      $view .= '<td><a href="detail.php?id='.$result["id"].'">'.$result["name"]."</td>";
     // $view .= "<td>".$result["name"]."</td>";
      $view .= "<td>".$result["place"]."</td>";
      $view .= "<td>".$result["distance"]."</td>";
      $view .= "<td>".$result["comment"]."</td>";
    // $view .= .$result["name"].$result["place"].$result["date"];
    // $view .= $result["place"]."[".$result["indate"]."]";
    // $view .= $result["name"]."[".$result["indate"]."]";
    $view .='<td><a href="delete.php?id='.$result["id"].'">'.'削除'.'</td>';
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
<title>ランニング記録表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- <style>div{padding: 10px;font-size:16px;}</style> -->
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録</a>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?=$view?></div>
  </div>
</div>
<!-- Main[End] -->

</body>
</html>
