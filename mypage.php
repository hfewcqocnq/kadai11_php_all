<?php
session_start();
include("funcs.php");
sschk();
$pdo = db_conn();
// $sql = "SELECT * FROM kadai11_php_all_table";

$sql = "SELECT
kadai11_php_all_table.id as id,
kadai11_php_all_table.title as title,
kadai11_php_all_user_table.name as name
FROM kadai11_php_all_table JOIN kadai11_php_all_user_table ON kadai11_php_all_table.user_id = kadai11_php_all_user_table.id";

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
  <title>マイページ</title>
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
<header>
    <?php include("menu.php"); ?>
</header>
<div class = "mypage">
  <h1><?php echo $_SESSION["name"]; ?>さんのマイページ</h1>
      <table>
        <caption>登録情報</caption>
        <tr>
          <td>名前：<?php echo $_SESSION["name"]; ?></td>
        </tr>
      </table>
      <table>
        <caption>登録データ一覧</caption>
      <?php foreach($values as $v){ ?>
        <tr>
          <?php if ($_SESSION["name"] === $v["name"]): ?>
          <td><?=h($v["id"])?>.　</td>
          <td><?=h($v["title"])?>　</td>
          <td class="henkou_click"><a class="link_click" href="detail.php?id=<?=h($v["id"])?>">変更</a></td>
          <td class="sakuzyo_click"><a class="link_click" href="delete.php?id=<?=h($v["id"])?>">削除</a></td>
          <?php endif; ?>
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
