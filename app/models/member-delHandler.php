<?php
require_once '../../class/db-class.php';
require_once '../../class/filter-danger-class.php';
$id = $_GET['id'];

$db = new Mydb();
$res = $db->sql("UPDATE member SET valid=0 WHERE member_id='$id'");
echo json_encode($res);

?>