<?php
require_once "pdo-connect.php";
$board_member_id=$_POST["board_member_id"];
$sql = "UPDATE board SET board_valid=0 WHERE board_member_id=?";
$stmt= $db_host->prepare($sql);
try{
    $stmt->execute([$board_member_id]);
    $data=array(
        "message"=>"修改board_valid成功"
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


?>