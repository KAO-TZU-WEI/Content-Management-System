<?php
require_once "db_connect.php";
$id = $_POST["id"];
$date = $_POST["date"];
$name = $_POST["name"];
$gender = $_POST["gender"];
$birth = $_POST["birth"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$urgent = $_POST["urgent"];
$remit = $_POST["remit"];

$sql = "UPDATE activity_sign_up SET `apply_participant_name`=?, `apply_gender`=?, apply_birth=?, apply_phone=?, apply_email=? ,apply_urgent_name=? ,`apply_remit`=? WHERE apply_id=?";
$stmt = $db_host->prepare($sql);
try {
    $stmt->execute([$name, $gender, $birth, $phone, $email, $urgent, $remit, $id]);
    header("location:apply-detail.php?id=" . $id);
} catch (PDOException $e) {
    echo "資料庫查詢失敗<br>";
    echo "Error: " . $e->getMessage();
    exit;
};
