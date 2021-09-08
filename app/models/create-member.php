<?php
require_once '../../class/db-class.php';
session_start();
$name = $_POST['name'];
$account = $_POST['account'];
$pwd = $_POST['pwd'];

//$db = new Mydb();
//$res = $db->sql("INSERT INTO member(member_name,member_account,member_password) VALUES('$name','$account','$pwd')");

$_SESSION['name'] = $name;
$_SESSION['memberaccount'] = $account;
$_SESSION['pwd'] = $pwd;



$data = array(
    "name" => $name,
    "memberaccount" => $account,
    "pwd" => $pwd,
);
echo json_encode($data);

?>