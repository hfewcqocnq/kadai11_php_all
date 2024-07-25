<?php
session_start();
include "funcs.php";
sschk();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ユーザー</title>
  <link href="css/style.css" rel="stylesheet">
</head>
<body>

<header>
    <?php include("menu.php"); ?>
</header>

<form method="post" action="user_insert.php">
    <div class="container user">
    <fieldset>
      <legend>ユーザー登録</legend>
      <label>名前　　　　：<input class="user_input" type="text" name="name"></label><br>
      <label>ログイン ID ：<input class="user_input" type="text" name="lid"></label><br>
      <label>ログイン PW：<input class="user_input" type="text" name="lpw"></label><br>
      <label>管理FLG　 　：
      一般<input class="user_input" type="radio" name="kanri_flg" value="0">　
      管理者<input class="user_input" type="radio" name="kanri_flg" value="1">
      </label>
      <br>
      <input class="user_click" type="submit" value="送信">
    </fieldset>
  </div>
</form>
</body>
</html>
