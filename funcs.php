<?php
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

function db_conn()
{
    try {
        $db_name = 'kadai11_php_all';    //つぶやきベース名
        $db_id   = 'root';      //アカウント名
        $db_pw   = '';      //パスワード：XAMPPはパスワード無しに修正してください。
        $db_host = 'localhost'; //DBホスト
        return new PDO('mysql:dbname='.$db_name.';charset=utf8;host='.$db_host, $db_id, $db_pw);
    } catch (PDOException $e) {
        exit('DB Connection Error:'.$e->getMessage());
    }
}

// function db_conn(){
//     try {
//         $db_name = "gsmito_kadai11_php_all";
//         $db_id   = "gsmito";
//         $db_pw   = "kadai08_db1";
//         $db_host = "mysql640.db.sakura.ne.jp";
//         return new PDO('mysql:dbname='.$db_name.';charset=utf8;host='.$db_host, $db_id, $db_pw);
//     } catch (PDOException $e) {
//         exit('DB Connection Error:'.$e->getMessage());
//     }
// }

function sql_error($stmt){
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);
}

function redirect($file_name){
    header("Location: ".$file_name);
    exit();
}

//SessionCheck(スケルトン) 
//ログインをして使用する箇所に入れる
function sschk(){
  //if(!…)は逆の意味（セットされていなければ）
  // || …orの意味
  //さっきのidと今のidを検証
  if(!isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"]!=session_id()){
    exit("Login Error");
  }else{
    session_regenerate_id(true);//SESSION KEYを入れ替える
    $_SESSION["chk_ssid"] = session_id();//新しいidを変数に入れ替える
  }
  }





