<?php
//admin 
session_start();
if(empty($_SESSION['username'])) {
    echo "<script>alert('非法登入'); location.href='./app/views/admin/admin.php';</script>";
    exit;
}

?>