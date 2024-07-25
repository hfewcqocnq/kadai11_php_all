<?php
session_start();

$lid = $_POST["lid"]; 
$lpw = $_POST["lpw"];

include("funcs.php");
$pdo = db_conn();

$stmt = $pdo->prepare("SELECT * FROM kadai11_php_all_user_table WHERE lid=:lid"); 
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$status = $stmt->execute();

if($status==false){
    sql_error($stmt);
}

$val = $stmt->fetch(); 
$pw = password_verify($lpw, $val["lpw"]); 
if($pw){ 
  $_SESSION["chk_ssid"]  = session_id();
  $_SESSION["kanri_flg"] = $val['kanri_flg'];
  $_SESSION["name"]      = $val['name'];
  $_SESSION["user_id"]   = $val['id'];
  $_SESSION["lid"]       = $val['lid'];

  redirect("select.php");
}else{
  redirect("login.php");
}

exit();


