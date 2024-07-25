<?php
include("funcs.php");
$pdo = db_conn();
$sql = "SELECT * FROM kadai11_php_all_table";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

$values = "";
if($status==false) {
  sql_error($stmt);
}

$values =  $stmt->fetchAll(PDO::FETCH_ASSOC); 
$json = json_encode($values,JSON_UNESCAPED_UNICODE);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>一覧画面</title>
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
<h1 class="daimei">登録データ一覧</h1>
  <div class="container itiran">
    <table>
      <?php foreach($values as $v){ ?>
        <tr>
          <td><?=h($v["id"])?>.　</td>
          <td><a href="nosyosai.php?id=<?=$v["id"]?>"><?=$v["title"]?></a></td>
        </tr>
      <?php } ?>
    </table>
  </div>
<script>
  const a = '<?php echo $json; ?>';
  console.log(JSON.parse(a));
</script>
</body>
</html>
