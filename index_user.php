<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>POSTユーザー登録</title>
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="css/style.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <!-- <nav class="navbar navbar-default">
    <div class="container-fluid"> -->
    <button><a class="navbar-brand" href="login.php">ログイン画面</a></button>
  <!-- </nav> -->
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert_user.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザー登録</legend>
     <label>名前     ：<input type="text" name="name"></label><br>
     <label>ID       ：<input type="text" name="lid"></label><br>
     <label>パスワード：<input type="text" name="lpw"></label><br>
     <!-- <label>管理フラグ：<input type="text" name="kanri_flg"></label><br> -->
     
     <label>管理フラグ：<input type="radio" name="kanri_flg" value=1>管理者
     <input type="radio" name="kanri_flg" value=0>一般</label><br>
     <label>使用フラグ：<input type="radio" name="life_flg" value=0>使用中<input type="radio" name="life_flg" value=1>不使用</label><br>


     <!-- <label>使用フラグ：<input type="number" name="life_flg"></label><br> -->

     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->

<!-- <input type="radio" name="q2" value="はい"> はい
<input type="radio" name="q2" value="いいえ" checked> いいえ -->
</body>
</html>