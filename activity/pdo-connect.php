<?php
$servername = 'localhost';
$username = 'root';
$password = '123456';
$dbname = 'project';

try {
    $db_host=new PDO(
        "mysql:host={$servername};dbname={$dbname};charset=utf8",$username,$password
    );
    // echo "connect success";
} catch (PDOException $e) {
    echo "資料庫連結失敗<br>";
    echo "Error:".$e->getMessage();
    exit;
}

?>