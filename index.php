<?php
session_start();
include "funcs.php";
sschk();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>登録画面</title>
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
<header>
    <?php include("menu.php"); ?>
</header>
  <form method="POST" action="insert.php">
    <div class="container touroku">
      <fieldset>
      <legend>登録</legend>
      <input type="text" name="title" size="40" placeholder="アイデアのタイトルを入力"/><br>
      <textArea name="naiyou" rows="10" cols="42" placeholder="アイデアの内容を入力"></textArea><br>
      <input class="index-click" type="submit" value="登録する">
      </fieldset>
    </div>
  </form>
</body>
</html>