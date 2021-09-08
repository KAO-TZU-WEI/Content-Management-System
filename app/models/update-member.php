<?php

require_once '../../class/db-class.php';
require_once '../../class/filter-danger-class.php';

$id = $_GET['id'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$birth = $_POST['birth'];
$account = $_POST['account'];
$password = $_POST['password'];
$level = $_POST['level'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];

$db = new Mydb();
$res = $db->sql("UPDATE member SET member_name='$name',member_account='$account',member_password='$password',member_gender='$sex',member_birthday='$birth',member_level='$level',member_phone='$phone',member_email='$email',member_address='$address' WHERE member_id='$id'");

if($res == 1) {
    header('location: ../views/member.php');
} else {
    echo "<script>alert('更新失敗')</script>";
    header('location: ../views/member.php');
}

?>