<?php
    date_default_timezone_set("Asia/Taipei");
    $servername = "localhost";
    $username = "root";
    $password ="";
    $dbname = "project";
    try{
        $db_host = new PDO( "mysql:host={$servername};dbname={$dbname}; charset=utf8",$username, $password);
        //echo "pdo成功";
    }catch(PDOException $e){
        echo "pdo失敗".$e->getMessage();

    }
?>