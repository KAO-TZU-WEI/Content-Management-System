<?php
require_once './db-class.php';
require_once './filter-class.php';
$str = new Filter();

$word = $_GET['word'];

$res = $str->filterWordAdmin($word);

//$res = $str->filterWordAdmin('一');

/*foreach($res[0] as $row) {
    $username = $row['username'];
    $account = $row['account'];
    $password = $row['password'];
    $email = $row['admin_email'];
    $phone = $row['admin_phone'];
    $rights = $row['rights'];
} 

$data = array(
    "username" => $username,
    "account" => $account,
    "password" => $password,
    "email" => $email,
    "phone" => $phone,
    "right" => $rights
);*/



$datafilter = json_encode($res);
echo $datafilter;


?>