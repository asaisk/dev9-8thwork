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
    <nav class="navbar navbar-default" >
    <div class="container-fluid"> 
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧
    <div class="navbar-header"><a class="navbar-brand" href="select_user.php">ユーザー一覧
    </a></div>
  </nav>


  <!-- <div class="navbar-header"><a class="navbar-brand" href="select_user.php">ユーザー一覧 -->


</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ランニング記録</legend>
     <label>日付：<input type="text" name="date"></label><br>
     <label>名前：<input type="text" name="name"></label><br>
     <label>場所：<input type="text" name="place"></label><br>
     <label>距離：<input type="number" name="distance"></label><br>
     <label><textArea name="comment" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
