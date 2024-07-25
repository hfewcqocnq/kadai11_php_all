<?php
$id = $_GET["id"];

include("funcs.php");
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
  <nav class="header_nav">
    <a class="header_click" href="top.php">TOP</a>
    <a class="header_click" href="noselect.php">登録データ一覧</a>
    <a class="header_click" href="nouser.php">ユーザー登録</a>
  </nav>
</header>
  <div class="syosai">
    <h1>
      <?=$row["title"]?>
    </h1>
    <a>
    <?php 
     $str1 = $row["naiyou"] ;
     $substr1 = mb_substr($str1, 0 ,15);
      echo (''.$substr1.'<br><br>…続きはログインで閲覧可能です<br><br>'); ?>
      <!-- 文字列途中まで表示 -->
    </a>
    <a class="click" href="noselect.php">戻る</a>
  </div>
</body>
</html>