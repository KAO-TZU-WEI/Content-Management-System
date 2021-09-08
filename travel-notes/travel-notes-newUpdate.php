<?php
require_once("./pdo-connect.php");
$travel_notes_title = $_POST["title"];
$travel_notes_article = $_POST["editor1"];
$travel_notes_uptime = date('Y-m-d H:i:s');
$sql = "INSERT INTO travel_notes (travel_notes_title, travel_notes_article,travel_notes_valid,travel_notes_uptime ) VALUES (?, ?, 1 , '$travel_notes_uptime')";
$stmtArticle = $db_host->prepare($sql);

try {
    $stmtArticle->execute([$travel_notes_title, $travel_notes_article]);
    echo "文章上傳成功";
    header("location: travel-notes-newUpload.php");
} catch (PDOException $e) {
    echo "文章上傳失敗<br>";
    echo "Error: " . $e->getMessage();
    exit;
}
