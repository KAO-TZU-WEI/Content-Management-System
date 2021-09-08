<?php

require_once '../../class/db-class.php';
require_once '../../class/filter-danger-class.php';

$db = new Mydb();

$username = $_POST['username'];
$sex = $_POST['sex'];
$birth = $_POST['birth'];
$account = $_POST['account'];
$password = $_POST['password'];
$email = $_POST['email'];
$memberLevel = $_POST['member'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$love = $_POST['love'];
$articalNum = $_POST['lova-artical-num'];
$itemNum = $_POST['love-item-num'];
$orderRecord = $_POST['order-record'];
$discountNum = $_POST['discount-num'];
$time = time();


$res = $db->sql("INSERT INTO member(member_name,member_account,member_password,member_gender,member_birthday,member_level,member_phone,member_email,member_address,discount_count,like_article,member_love,addtime) VALUES('$username','$account','$password','$sex','$birth','$memberLevel','$phone','$email','$address','$discountNum','$articalNum','$itemNum','$time')");


if($res == 1) {
    header('location: ../views/member.php');
} else {
    echo "<script>alert('添加會員失敗');</script>";
    header('location: ../views/member.php');
}

//轉譯功能還沒弄
?>