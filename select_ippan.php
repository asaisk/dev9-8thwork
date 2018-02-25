<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    
    </head>
     
<header>
  <button><a class="navbar-brand" href="login.php">ログイン</a></button>
  <button><a class="navbar-brand" href="index_user.php">新規登録</a></button>

<div id="head_pic">
  <img src="PC_pic.jpg" alt="pc_picture" width=900px height=300px>
  <img src="pc_pic2.jpg" alt="pc_picture" width=500px height=300px>
</div>

</header>

  <body>
 <h1>一覧専用ページ</h1>
    
  

<?php
//1.  DB接続します

include("functions.php");

//↓短縮形です！
$pdo=db_con();

//２．データ登録SQL作成

$stmt = $pdo->prepare("SELECT * FROM gs_code_table");
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
    $view .='<ul>';
    $view .= "<li>".$result["date"]."</li>"; 
    $view .= "<li>".$result["name"]."</li>";
    $view .= "<li>".$result["spec"]."</li>";
    $view .= "<li>".$result["subject"]."</li>";
    $view .= "<li>".$result["source"]."</li>";
    $view .= "<li>".$result["link"]."</li>";
    $view .='</ul>';
  

}
} 

?>
   
    <div class="container jumbotron"><?=$view?></div>
 
    </body>
  </html>
