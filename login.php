<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">


<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style_2.css">
<!-- <style>div{padding: 10px;font-size:16px;}</style> -->
<title>ログイン</title>

</head>





<body>

<div>
<button><a href="index_user.php">新規登録</a><br></button>
<button><a href="login_kanri.php">管理者用</a><br></button>
<!-- <button><a href="index_user.php" ><img src="trash.jpeg" alt=""></a><br>新規登録</button> -->
<button><a href="select_ippan.php">一覧</a></button>

<h2>一般用ログインページです</h2>




<!-- login_act.php は認証処理用のPHPです。 -->
<form name="form1" action="login_act.php" method="post">
ID:<input type="text" name="lid"><br>
PW:<input type="password" name="lpw"><br>
<input type="submit" value="LOGIN">
</form>
</div>
<!-- <button class=btn> -->

<!-- </button> -->



</body>
</html>