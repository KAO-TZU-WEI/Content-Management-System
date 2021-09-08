<?php
require_once "pdo-connect.php";
$order_id = $_GET["order_id"];
    

// $sql = "UPDATE order_list SET board_valid=0 WHERE order_id='$order_id'";
$sql = "UPDATE order_list SET order_valid=0 WHERE order_id='$order_id'";
echo $sql;

$res = $db_host->exec($sql);

if ($res >0) {

    header("location: orderUserList.php");
} else {

    echo "Data delete fault" . $conn->error;
}
