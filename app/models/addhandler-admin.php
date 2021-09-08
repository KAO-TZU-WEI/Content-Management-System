<?php
require_once '../../class/db-class.php';
require_once '../../class/filter-danger-class.php';
//post request
$adminName = $_POST['admin_name'];
$adminSex = $_POST['sex'];
$adminAccount = $_POST['admin_account'];
$adminPassword = $_POST['admin_password'];
$rights = $_POST['rights'];
$adminEmail = $_POST['admin_email'];
$adminPhone = $_POST['admin_phone'];

if(!isset($adminSex) || !isset($rights)) {
    header('location:../views/admin/admin-add.php');
    exit;
}

$adminAdd = new Mydb();
$res = $adminAdd->sql("INSERT INTO admin(username,admin_gender,account,password,admin_email,admin_phone,rights) VALUES('$adminName','$adminSex','$adminAccount','$adminPassword','$adminEmail','$adminPhone','$rights')");

if($res >= 1) {
   echo "<script>location.href='../views/admin/admin-info.php';</script>";
}

?>