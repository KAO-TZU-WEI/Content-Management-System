<?php
require_once "db_connect.php";
$activitys = array();
$update = $db_host->prepare('UPDATE activity_info SET activity_date_now = Now()');
$stmt = $db_host->prepare("SELECT * ,DATEDIFF(activity_deadline,activity_date_now) AS countDown FROM activity_info");

try {
    $update->execute();
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        $data = array(
            "id" => $row["activity_id"],
            "name" => $row["activity_name"],
            "location" => $row["activity_location"],
            "schedule" => $row["activity_schedule"],
            "start" => $row["activity_date"],
            "end" => $row["activity_deadline"],
            "count" => $row['countDown']
        );
        array_push($activitys, $data);
    }
} catch (PDOException $e) {
    echo "資料庫連接失敗<br>";
    echo "Error: " . $e->getMessage();
    exit;
}

echo json_encode($activitys);
