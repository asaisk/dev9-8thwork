<?php
//index.php（登録フォームの画面ソースコードを全コピーして、このファイルをまるっと上書き保存）

$id = $_GET["id"];

// echo "GET:".$id;

//1.  DB接続します
try {
    $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
  } catch (PDOException $e) {
    exit('データベースに接続できませんでした。'.$e->getMessage());
  }
  
  //２．データ登録SQL作成
  $stmt = $pdo->prepare("SELECT * FROM gs_code_table WHERE id=:id");
  $stmt->bindvalue(":id",$id, PDO::PARAM_INT);
  $status = $stmt->execute();
  
  
  //３．データ表示
  $view="";
  if($status==false){
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
  }else{
       $row= $stmt->fetch();
    
  }
  
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>POSTデータ登録</title>
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="css/style.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

</head>
<body>

<!-- Head[Start] -->
<header>
  <!-- <nav class="navbar navbar-default">
    <div class="container-fluid"> -->
    <button><a class="navbar-brand" href="select.php">データ一覧</a></button>

    
  <!-- </nav> -->
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="update.php"> 
  <div class="jumbotron">
   <fieldset>
    <legend>プログラム記録</legend>
     <label>日付：<input type="text" name="date" value="<?=$row["date"]?>"></label><br>
     <label>名前：<input type="text" name="name" value="<?=$row["name"]?>"></label><br>
     <label>種類：<input type="text" name="spec" value="<?=$row["spec"]?>"></label><br>
     <label>題名：<input type="text" name="subject" value="<?=$row["subject"]?>"></label><br>
     <label>ソース：<textArea name="source" id="source" rows="4" cols="40"><?=$row["source"]?></textArea></label><br>
     <label>Link：<input type="text" name="link" value="<?=$row["link"]?>"></label><br>
     

     <input type="submit" value="送信">
     <input type="hidden" name="id" value="<?=$id?>">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->

<button id="btn">Copy to Clipboard</button>

<script>
  
  // $("textarea").on("click",function(){
  // $(this).select();
  // document.execCommand('copy');



$("#btn").click(function(){
    $("#source").select();
    document.execCommand('copy');
// });


});





    </script>




</body>
</html>




