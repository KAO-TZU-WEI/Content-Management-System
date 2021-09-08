<?php

require_once '../../class/db-class.php';
require_once '../../class/filter-danger-class.php';
$db = new Mydb();

$id = $_GET['id'];
$name = $_POST['admin_name'];
$gender = $_POST['sex'];
$account = $_POST['admin_account'];
$password = $_POST['admin_password'];
$rights = $_POST['rights'];
$email = $_POST['admin_email'];
$phone = $_POST['admin_phone'];




$adminUpdate = $db->sql("UPDATE admin SET username='$name',admin_gender='$gender',account='$account',password='$password',admin_email='$email',admin_phone='$phone',rights='$rights' WHERE id='$id'");

if($adminUpdate == 1) {
    header('location:../views/admin/admin-info.php');
} else {
    echo 'err';
};

?>