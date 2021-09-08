<?php

$id = $_GET['id'];

require_once '../../class/db-class.php';

$db = new Mydb();
$res = $db->sql("DELETE FROM adminlog WHERE id='$id'");
if($res == 1) {
    echo "<script>location.href = '../views/admin/admin-status.php';</script>";
} else {
    echo 'delete error';
}


?>