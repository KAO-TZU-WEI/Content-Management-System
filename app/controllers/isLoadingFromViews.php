<?php
//admin 
session_start();
if(empty($_SESSION['username'])) {
    echo "<script>alert('非法登入'); location.href='./admin.php';</script>";
    exit;
}

?>