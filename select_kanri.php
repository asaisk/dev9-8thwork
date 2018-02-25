<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/clipboard.js/1.5.3/clipboard.min.js"></script>
    <script>
        $(function () {
          var clipboard = new Clipboard('.btn');
        });
    </script> -->
    </head>
<header>
  <button><a class="navbar-brand" href="index.php">データ登録</a></button>
  <button><a class="navbar-brand" href="select_user.php">ユーザー管理</a></button>
  <button><a class="navbar-brand" href="logout.php">ログアウト</a></button>
  <h2>管理者用ページ</h2>
</header>

  <body>
   <!-- コピー対象 -->
    <!-- <input id="foo" value= "source" size="60"> -->

    <!-- コピーボタン -->
    <!-- <button class="btn" data-clipboard-target="#foo">
        クリップボードにコピー
    </button>   -->
  
  
  

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
    $view .= '<li><a href="detail.php?id='.$result["id"].'">'.$result["name"]."</a></li>";
    $view .= "<li>".$result["spec"]."</li>";
    $view .= "<li>".$result["subject"]."</li>";
    $view .= '<li id='.'$result["id"]'.'>'.$result["source"]."</li>";
    $view .= "<li>".$result["link"]."</li>";
    $view .='<button> <a href="delete.php?id='.$result["id"].'">'.'<img src="trash.jpeg" alt="">'.'</a></button>';
    // $view .='<button>'.'Copy'.'</button>';
    $view .='</ul>';

    

}
} 

?>
   
    <div class="container jumbotron"><?=$view?></div>
 
    </body>
  </html>