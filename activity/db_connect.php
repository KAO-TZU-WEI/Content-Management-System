<?php
$username="localhost";
$db_user="root";
$db_password='';
$db_name="project";

// $db_link=new mysqli($username,$db_user,$db_password,$db_name);
// if ($db_link->connect_error!=""){
//     echo"資料庫建立失敗";
// }else{
//     echo"資料庫建立完成";
// }

//PDO寫法
try{
    $db_host=new PDO(
        "mysql:host={$username};dbname={$db_name};charset=utf8", $db_user, $db_password
    );
    //echo 'success';
}catch(PDOException $e){
    echo "資料庫連接失敗<br>";
    echo "Error: ".$e->getMessage();
    exit;
}
