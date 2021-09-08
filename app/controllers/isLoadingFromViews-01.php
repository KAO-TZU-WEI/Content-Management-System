<?php
//member
session_start();
if(empty($_SESSION['username'])) {
    echo "<script>alert('非法登入'); location.href='./admin/admin.php';</script>";
    exit;
}

?>