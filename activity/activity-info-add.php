<?php
require_once "db_connect.php";
$acname=$_POST["acname"];
$limit=$_POST["limit"];
$schedule=$_POST["schedule"];
$location=$_POST["location"];
$start=$_POST["start"];
$cost=$_POST['cost'];
$end=date("Y-m-d", strtotime("$start 3 month"));
$stmt=$db_host->prepare("INSERT INTO activity_info(`activity_name`,`activity_location`,`activity_schedule`,`activity_limit`,`activity_date`,`activity_deadline`,`activity_cost`,`activity_date_now`) VALUES ('$acname','$location','$schedule','$limit','$start','$end','$cost',now())");

try {
    $stmt->execute();
}catch (PDOException $e) {
    echo "資料庫連接失敗<br>";
    echo "Error: " . $e->getMessage();
    exit;
}
echo json_encode ($stmt);
?>