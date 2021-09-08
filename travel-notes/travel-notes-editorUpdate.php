<?php
require_once("./pdo-connect.php");
$travel_notes_id = $_POST["id"];
$travel_notes_title = $_POST["tittle"];
$travel_notes_article = $_POST["editor1"];
$travel_notes_uptime = date('Y-m-d H:i:s');
$sql = "UPDATE travel_notes
        SET travel_notes_title=?,travel_notes_article=?,travel_notes_uptime='$travel_notes_uptime'
        WHERE travel_notes_id=?";
$stmt = $db_host->prepare($sql);

try {
    $stmt->execute([$travel_notes_title, $travel_notes_article,$travel_notes_id]);
    echo "文章修改成功";
    header("location: travel-notes-list.php");
} catch (PDOException $e) {
    echo "文章修改失敗<br>";
    echo "Error: " . $e->getMessage();
    exit;
}
