<?php
session_start();

$title   = $_POST["title"];
$naiyou = $_POST["naiyou"];
$user_id = $_SESSION["user_id"];

include("funcs.php");
sschk();
$pdo = db_conn(); 

$stmt = $pdo->prepare("INSERT INTO kadai11_php_all_table(user_id,title,naiyou,indate)VALUES(:user_id,:title,:naiyou,sysdate())");
$stmt->bindValue(':title',   $title,   PDO::PARAM_STR);
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);
$status = $stmt->execute(); 

if($status==false){
    sql_error($stmt);
}else{
    redirect("index.php");
}
?>
