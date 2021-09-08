<?php
require_once("db_connect.php");
$activity = $_POST['activity_name'];
$ac_date=$_POST['activity_date'];
$name = $_POST["full_name"];
$gender = $_POST['sex'];
$birth = $_POST["birth"];
$phone = $_POST["phone_number"];
$email = $_POST["email_address"];
$urgent = $_POST["urgent_name"];
if (isset($_SESSION["member_id"])){
    $member = $_POST["member_id"];
}else{
    $member =0;
}

//PDO寫法
$sql = "INSERT INTO activity_sign_up (apply_name,apply_date,apply_participant_name,apply_gender,apply_birth,apply_phone,apply_email,apply_urgent_name,apply_remit,valid,apply_member,apply_order_date) VALUES (?,?,?,?,?,?,?,?,?,?,?,now())";
$stmt = $db_host->prepare($sql);
try {
    $stmt->execute([$activity,$ac_date,$name,$gender,$birth,$phone,$email,$urgent,'0','0',$member]);
   header("location: activity-signup.php");
} catch (PDOException $e) {
    echo "資料庫建立失敗";
    echo "ERROR:" . $e->getMessage();
}

// $sql = "INSERT INTO activity_sign_up(apply_name,apply_participant_name,apply_gender,apply_birth,apply_phone,apply_email,apply_urgent_name,apply_date,apply_remit) VALUES('$activity','$name','$gender','$birth','$phone','$email','$urgent', NOW(),'0')";
// $db_link->query($sql) . "資料建立成功!!'";

// if ($db_link->query($sql)) {
//     $last_id = $db_link->apply_id;
//     echo "資料建立成功,這筆資料代號是'$apply_id'";
//     header("location: user-list.php");
// } else {
//     echo "Error:" . $sql . "<br>" . $db_link->error;
// }
