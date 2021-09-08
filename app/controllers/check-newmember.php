<?php
require_once '../../class/db-class.php';


$db = new Mydb();



$data = $db->select("SELECT * FROM member");

echo json_encode($data);



?>