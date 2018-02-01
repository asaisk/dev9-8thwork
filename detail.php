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
  $stmt = $pdo->prepare("SELECT * FROM gs_bm_table WHERE id=:id");
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
    //Selectデータの数だけ自動でループしてくれる
    //  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    //    $view .='<p>';
    //    $view .='<a href="detail.php?id='.$result["id"].'">'; 
    //    $view .= $result["name"]."[".$result["indate"]."]";
    //    $view .='</a>';
    //    $view .='</p>';
    //  }
  }
  
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>POSTデータ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="update.php"> 
  <div class="jumbotron">
   <fieldset>
    <legend>ランニング記録</legend>
     <label>日付：<input type="text" name="date" value="<?=$row["date"]?>"></label><br>
     <label>名前：<input type="text" name="name" value="<?=$row["name"]?>"></label><br>
     <label>場所：<input type="text" name="place" value="<?=$row["place"]?>"></label><br>
     <label>距離：<input type="number" name="distance" value="<?=$row["distance"]?>"></label><br>
     <label><textArea name="comment" rows="4" cols="40"><?=$row["comment"]?></textArea></label><br>
     <input type="submit" value="送信">
     <input type="hidden" name="id" value="<?=$id?>">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>




