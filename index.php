<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>POSTプログラミング過去記録</title>
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="css/style.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
  <script src="./ckeditor/ckeditor.js"></script>
</head>
<body>

<!-- Head[Start] -->
<header>
    <!-- <nav class="navbar navbar-default" >
    <div class="container-fluid">  -->
    <!-- <div class="navbar-header"> -->
    <button>  <a class="navbar-brand" href="select.php">データ一覧</a></button>
    <!-- 　　　　　　　　　　　　　　　<a class="navbar-brand" href="select_user.php">ユーザー一覧 -->
    <!-- </a></div>
  </nav> -->


  <!-- <div class="navbar-header"><a class="navbar-brand" href="select_user.php">ユーザー一覧 -->


</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <!-- <fieldset> -->
    <legend>プログラミングメモ</legend>
     <!-- <label>日付：<input type="text" name="date"></label><br> -->
     <label>名前：<input type="text" name="name" size="50px"></label><br>
     
     <label>種類：<select name="spec" size="2">
                    <option value="html">html</option>
                    <option value="css">css</option> 
                    <option value="js">js</option>
                    <option value="php">php</option>
                    <option value="その他">その他</option>
                  </select>
     </label><br>
     <label>題名：<input type="text" name="subject" size="50px"></label><br>
     <!-- <label>種類：<input type="text" name="spec"></label><br> -->
     <label>コード：
     <textarea name="source" id="editor1" cols="50" rows="10"></textarea><br>

     <label>Link：<input type="text" name="link" size="50px">
     </label><br>

     <input type="submit" value="送信">
     </label>  

    
  </div>
</form>
<script>
// CKEDITOR.replace('editor1');
</script>
<!-- Main[End] -->


</body>
</html>
