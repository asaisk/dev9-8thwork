<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/clipboard.js/1.5.3/clipboard.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>


    <!-- <script>
        $(function () {
          var clipboard = new Clipboard('.btn');
        });
    </script> -->
    </head>
<header>
  <button><a class="navbar-brand" href="index.php">データ登録</a></button>
  <button><a class="navbar-brand" href="logout.php">ログアウト</a></button>
  <h2>会員用ページ</h2>
</header>

  <!-- <body> -->


  
  

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
    $view .= '<li><a href="'.$result["link"].'">'.$result["link"].'</a></li>';
    
    //  $view .= "<li>".$result["link"]."</li>";
    $view .='<button> <a href="delete.php?id='.$result["id"].'">'.'<img src="trash.jpeg" alt="">'.'</a></button>';
    // $view .='<button>'.'Copy'.'</button>';
    $view .='</ul>';

}
} 
?>
<body>
   <input type= "text" id="search">
   <button id="ajax">検索</button>  

    <!-- <div class="container jumbotron"><?=$view?></div> -->
    <div id="view"><?=$view?></div>
<!-- ここから検索ようのプログラムのはず！ -->

<script>
        $("#ajax").on("click", function() {
            $.ajax({
                type: "POST",
                url: "ajax_search.php",
                data:{search: $("#search").val()},
                datatype: "html",
                success: function(data) {
                    $("#view").html(data);
                }
            });
        });
    </script>
  
    </body>
  </html>