<?php
session_start();
include("funcs.php");
sschk();
$pdo = db_conn();
$sql = "SELECT * FROM kadai11_php_all_table WHERE";
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
    <?php include("menu.php"); ?>
</header>
<div>
    <div class="itiran">

      <table>
      <?php foreach($values as $v){ ?>
        <tr>
          <td><?=h($v["id"])?>.</td>
          <td><a href="detail.php?id=<?=$v["id"]?>"><?=$v["title"]?></a></td>
           <td><a href="delete.php?id=<?=h($v["id"])?>">削除</a></td>
        </tr>
      <?php } ?>
      </table>

  </div>
</div>
<script>
  const a = '<?php echo $json; ?>';
  console.log(JSON.parse(a));
</script>
</body>
</html>
