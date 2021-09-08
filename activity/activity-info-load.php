<?php
$id=$_POST['id'];
require_once("db_connect.php");
$stmt=$db_host->prepare('SELECT * FROM activity_info WHERE activity_id=:id');
$infoDetail=array();
$stmt->execute(array(
    
    ":id"=>$id
));

try{
    while ($row=$stmt->fetch()){
        $data=array(
           'id'=>$row['activity_id'], 
           'name'=> $row['activity_name'], 
           'date'=>  $row['activity_date'], 
           'location'=>$row['activity_location'], 
           'schedule'=>$row['activity_schedule'], 
           'deadline'=>$row['activity_deadline'], 
           'limit'=>$row['activity_limit'],
           'cost'=>$row['activity_cost'],
        );
        array_push($infoDetail, $data);
    }
}
catch (PDOException $e) {
    echo "資料庫連接失敗<br>";
    echo "Error: " . $e->getMessage();
    exit;
}
echo json_encode ($infoDetail);

?>
