<?php
require_once("./pdo-connect.php");

$travel_notes_id = $_POST["id"];
$sql = "UPDATE travel_notes SET travel_notes_valid=0 WHERE travel_notes_id=?";
$stmt = $db_host->prepare($sql);

try{
    $stmt->execute([$travel_notes_id]);
    $data=array(
        "message"=>"修改成功"
    );
    echo json_encode($data);
}catch(PDOException $e){
    $data=array(
        "message"=>"Error: ".$e->getMessage()
    );
    echo json_encode($data);
    exit;
}

// try{
//     $stmt->execute([$travel_notes_id]);
//     // echo "修改成功";
//     header("location: travel-notes-list.php");
// }catch(PDOException $e){
//     echo "資料庫查詢失敗<br>";
//     echo "Error: ".$e->getMessage();
//     exit;
// }
