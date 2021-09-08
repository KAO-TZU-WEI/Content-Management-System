<?php
require_once("./pdo-connect.php");
$stmt = $db_host->prepare("SELECT * FROM travel_notes 
                            WHERE travel_notes_valid=1 ORDER BY travel_notes_id DESC");
$stmt->execute();
$articles = array();

while ($row = $stmt->fetch()) {
    $data = array(
        "travel_notes_id" => $row["travel_notes_id"],
        "travel_notes_title" => $row["travel_notes_title"],
        "travel_notes_article" => $row["travel_notes_article"],
        "travel_notes_uptime" => $row["travel_notes_uptime"]
    );
    array_push($articles, $data);
}

echo json_encode($articles);
