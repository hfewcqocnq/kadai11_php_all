<?php
session_start();

$title   = $_POST["title"];
$naiyou = $_POST["naiyou"];
$id     = $_POST["id"];

include("funcs.php");
sschk();
$pdo = db_conn(); 

$sql = "UPDATE kadai11_php_all_table SET title=:title,naiyou=:naiyou WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':title',   $title,   PDO::PARAM_STR); 
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR); 
$stmt->bindValue(':id',    $id,    PDO::PARAM_INT);
$status = $stmt->execute();

if($status==false){
    sql_error($stmt);
}else{
    redirect("select.php");
}
?>
