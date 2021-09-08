<?php
require_once "pdo-connect.php";

$stmt=$db_host->prepare("SELECT * FROM board WHERE board_valid=1 ORDER BY board_date DESC");
$stmt->execute();

$users=array();

while($row = $stmt->fetch()) { 
    $data=array(
        "board_member_id"=>$row["board_member_id"],
        "board_id"=>$row["board_id"],
        "reply_member_id"=>$row["reply_member_id"],
        "board_content"=>$row["board_content"],
        "board_report"=>$row["board_report"],
        "board_date"=>$row["board_date"]
    );
    array_push($users, $data);
}

echo json_encode($users);

?>