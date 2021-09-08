<!DOCTYPE html>

<?php
session_start();
require_once '../../class/db-class.php';
require_once '../models/admin-login-handler.php';

$login = new Adminlogin();
$admindetail = new Mydb();
$account = $_POST['account'];
$password = $_POST['password'];
//取得USERNAME
$usernameArr = $admindetail->select("SELECT username,rights FROM admin WHERE account='$account'",1);
$username = $usernameArr['username'];
$rights = $usernameArr['rights'];
$islogin = $login->isLogin($account, $password);


if($islogin == 1) {
    $_SESSION['username'] = $username;
    $_SESSION['account'] = $account;
    $_SESSION['rights'] = $rights;
    
    header('location:../../index-page.php');
}
if($islogin == -1) {
    header('location:../views/admin/admin.php');
    
}
if($islogin == -2) {
    header('location:../views/admin/admin.php');
}


?> 

