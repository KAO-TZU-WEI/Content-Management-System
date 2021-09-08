<?php 
    require_once "pdo-connect.php";
    $order_id=$_POST["order_id"];
    
    // $order_product_id=$_POST["order_product_id"];
    // $order_amount=$_POST["order_amount"];
    // $order_coupon=$_POST["order_coupon"];
    $order_payment_status=$_POST["order_payment_status"];
    $order_status=$_POST["order_status"];
    $order_date=date('YYYY-MM-DD hh:mm:ss');
    $order_pay=$_POST["order_pay"];
    $order_address=$_POST["order_address"];

    $sql = "UPDATE order_list SET order_payment_status='$order_payment_status' , order_status='$order_status' , order_pay='$order_pay' , order_address='$order_address'  WHERE order_id='$order_id'";

    /*if ($conn->query($sql) === TRUE) {
        echo "更新成功";
        header("location: user.php?order_id=".$order_id);
        // header("location: user-list.php");
    } else {
            echo "更新資料錯誤: " . $conn->error;
    }*/
    $res = $db_host->exec($sql);
    
    if($res == 1) {
        echo "更新成功";
        header("location: orderUserList.php");
    } else {
        echo "更新資料錯誤: ";
    }
?>