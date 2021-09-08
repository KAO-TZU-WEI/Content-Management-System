<?php
require_once("db_connect.php");
$id=$_POST['id'];
$sql = "DELETE FROM activity_info WHERE `activity_id`='$id'";
$stmt= $db_host->prepare($sql);

try{
    $stmt->execute();
    $data=array(
        "message"=>"修改成功"
    );
    echo json_encode($data);
}catch(PDOException $e){
    echo "資料庫查詢失敗<br>";
    echo "Error: ".$e->getMessage();
    $data=array(
        "message"=>"Error: ".$e->getMessage()
    );
    echo json_encode($data);
    exit;
}
// $data = array("id" => "$id");
// echo json_encode($data);
// header("location:activity-info.php");
?>