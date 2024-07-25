<?php
session_start();
$id = $_GET["id"];

include("funcs.php");
sschk();
$pdo = db_conn();

$stmt = $pdo->prepare("DELETE FROM kadai11_php_all_table WHERE id=:id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

if($status==false){
  sql_error($stmt);
}else{
  redirect("select.php");
}
?>
