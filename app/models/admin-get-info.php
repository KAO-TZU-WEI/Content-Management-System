<?php

require_once '../../class/db-class.php';
require_once '../../class/filter-danger-class.php';

$id = $_GET['id'];

$db = new Mydb();
$adminInfo = $db->select("SELECT * FROM admin WHERE id='$id'");

foreach($adminInfo as $row) {
    $id = $row['id'];
    $username = $row['username'];
    $gender = $row['admin_gender'];
    $account = $row['account'];
    $password = $row['password'];
    $email = $row['admin_email'];
    $phone = $row['admin_phone'];
    $rights = $row['rights'];
    
}

$data = array(
    "id" => $id,
    "username" => $username,
    "gender" => $gender,
    "account" => $account,
    "password" => $password,
    "email" => $email,
    "phone" => $phone,
    "rights" => $rights
);
echo json_encode($data);

?>