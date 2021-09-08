<?php 
    require_once "pdo-connect.php";

    $board_member_id=$_POST["board_member_id"];
    $board_id=$_POST["board_id"];
    $reply_member_id=$_POST["reply_member_id"];
    $board_content=$_POST["board_content"];
    $board_date=date('Y/m/d H:i:s');
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password ,array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8;"));
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
        // begin the transaction
        $conn->beginTransaction();
        // our SQL statements
        $conn->exec("INSERT INTO board (board_member_id , board_id , reply_member_id , board_content , board_valid , board_date)
        VALUES ('$board_member_id', '$board_id', '$reply_member_id' ,'$board_content' , '1' , '$board_date')");
        
      
        // commit the transaction
        $conn->commit();
        echo "New records created successfully";
        header("location: board.php");
      } catch(PDOException $e) {
        // roll back the transaction if something failed
        $conn->rollback();
        echo "Error: " . $e->getMessage();
      }
      
      $conn = null;
?>