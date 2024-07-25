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
  <title>更新画面</title>
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
<header>
    <?php include("menu.php"); ?>
</header>
<form method="POST" action="update.php"> 
  <div class=" container kousin">
   <fieldset>
    <legend>登録データ更新</legend>
     <input type="text" name="title" size="40" value="<?=$row["title"]?>"><br>
     <textArea name="naiyou" rows="10" cols="42"><?=$row["naiyou"]?></textArea><br>
     <input type="hidden" name="id" value="<?=$row["id"]?>">
     <input class="detail-click" type="submit" value="更新">
    </fieldset>
  </div>
</form>
</body>
</html>

