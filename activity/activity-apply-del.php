<?php
require_once("db_connect.php");
$id = $_GET["id"];
$sql = "UPDATE activity_sign_up SET valid=1 WHERE apply_id=?";
$stmt = $db_host->prepare($sql);

try {
    $stmt->execute([$id]);
    //var_dump($stmt);
    header("location: activity-apply.php");
} catch (PDOException $e) {
    echo "刪除失敗<br>";
    echo "ERROR:" . $e->getMessage();
    exit;
}
// $sql_del = "DELETE FROM activity_sign_up WHERE `apply_id`='$id'";
// $result_del = $db_link->query($sql_del);
// if ($db_link->query($sql_del) === TRUE) {
//     echo "刪除成功";
// } else {
//     echo "刪除錯誤: " .$db_link->error;
// }
// header("location: activity-apply.php");
