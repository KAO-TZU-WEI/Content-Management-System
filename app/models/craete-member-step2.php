<?php

require_once '../../class/db-class.php';
session_start();

$name = $_SESSION['name'];
$account = $_SESSION['account'];
$pwd = $_SESSION['pwd'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$radioStatusSex = $_POST['radioStatusSex'];
$address = $_POST['address'];
$radioStatusLevel = $_POST['radioStatusLevel'];
$time = time();
$ip = $_SERVER['REMOTE_ADDR'];


$db = new Mydb();
$res = $db->sql("INSERT INTO member(member_name,member_account,member_password,member_phone,member_email,member_birthday,member_gender,member_address,member_level,loginip,addtime) VALUES('$name','$account','$pwd','$phone','$email','$birthday','$radioStatusSex','$address','$radioStatusLevel','$ip','$time')");

$data = array(
    "result" => "加入會員成功"
);
echo json_encode($data);
?>