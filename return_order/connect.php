<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error){
        die("連線失敗： ". $conn->connect_error);
    }else{
        // echo "連線成功";
    }
?>