<?php
session_start();
$id = $_GET["id"];
include("funcs.php");
sschk();
$pdo = db_conn();

$sql = "SELECT * FROM kadai11_php_all_table WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id',$id,PDO::PARAM_INT);
$status = $stmt->execute();

if($status==false) {
  sql_error($stmt);
}else{
  $row = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>詳細画面</title>
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
<header>
    <?php include("menu.php"); ?>
</header>
  <div class="syosai">
    <h1>
      <?=$row["title"]?>
    </h1>
    <a class=syosai-naiyou>
    <?=$row["naiyou"]?>
    </a><br>
    <a class="click" href="select.php">戻る</a>
  </div>
</body>
</html>