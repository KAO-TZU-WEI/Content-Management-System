<?php
require_once "db_connect.php";
$id = $_POST["id"];
$name = $_POST["name"];
$start = $_POST["start"];
$end = $_POST["end"];
$location = $_POST["location"];
$limit = $_POST["limit"];
$cost = $_POST["cost"];
$schedule = $_POST["schedule"];

$sql = "UPDATE activity_info SET `activity_name`=?, `activity_date`=?, `activity_deadline`=?, `activity_location`=? , `activity_schedule`=? ,`activity_limit`=? , `activity_cost`=? WHERE `activity_id`=?";
$stmt = $db_host->prepare($sql);
try {
    $stmt->execute([$name, $start, $end, $location, $schedule, $limit, $cost, $id]);
} catch (PDOException $e) {
    echo "資料庫查詢失敗<br>";
    echo "Error: " . $e->getMessage();
    exit;
};

$data = array("name" => "$name", "start" => "$start", "end" => "$end", "location" => "$location", "limit" => "$limit", "schedule" => "$schedule", "cost" => "$cost" ,"id" => "$id");
echo json_encode($data);
