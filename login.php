<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/main.css" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
<title>ログイン</title>

</head>
<body>

<header>
  <nav class="navbar navbar-default">ログインしてください</nav>  
  
</header>



<div class="user_reg">

<a href="index_user.php">新規ユーザー登録はこちら！</a>
<style>.user_reg{marigin-top:50px}</style>
</div>

<!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
<form name="form1" action="login_act.php" method="post">
ID:<input type="text" name="lid" />
PW:<input type="password" name="lpw" />
<input type="submit" value="LOGIN" />

</form>




<button class="ippan">
<a class="navbar-brand" href="select_ippan.php">ユーザー登録されていない方</a>
<style>button{margin-top:100px;font-size:20px;}</style>
</button>

</body>
</html>