<?php

require_once '../../class/db-class.php';
require_once '../../class/filter-danger-class.php';

$id = $_GET['id'];

$changeValid = new Mydb();
$res = $changeValid->sql("UPDATE admin SET valid='0' WHERE id='$id'");

if($res >= 1) {
   $data = array(
       "message" => "修改成功"
   );
   echo json_encode($data);
   
}

?>