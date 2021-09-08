<?php 
    include("connect.php");
    $sql_query = "SELECT * FROM return_order ORDER BY ID ASC";
    $result = $conn->query($sql_query);
    $total_records = $result->num_rows;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>退換貨管理系統</title>
</head>
<body>
    <h1 align="center">退換貨管理系統</h1>
    <p align="center">目前資料筆數:<?php echo $total_records;?>，<a href="add.php">新增退換貨訂單</a>。</p>
    <table border="1" align="center">
        <tr>
            <th>ID</th>
            <th>訂單編號</th>
            <th>姓名</th>
            <th>電話</th>
            <th>email</th>
            <th>地址</th>
            <th>退貨原因</th>
            <th>退貨日期</th>
            <th>功能</th>
        </tr>

<?php
    while($row_result=$result->fetch_assoc()){
        echo "<tr>";
            echo "<td>".$row_result["ID"]."</td>";
            echo "<td>".$row_result["OrderID"]."</td>";
            echo "<td>".$row_result["Name"]."</td>";
            echo "<td>".$row_result["telNumber"]."</td>";
            echo "<td>".$row_result["Email"]."</td>";
            echo "<td>".$row_result["Address"]."</td>";
            echo "<td>".$row_result["Reason"]."</td>";
            echo "<td>".$row_result["createTime"]."</td>";
            echo "<td><a href='update.php?id=".$row_result["ID"]."'>修改</a> ";
            echo "<a href='delete.php?id=".$row_result["ID"]."'>刪除</a></td>";
            echo "</tr>";
    }
    ?>
    </table>

</body>
</html>