<?php 
    include("connect.php");

    // 預設每頁筆數
    $pageRow_records = 3;
    // 預設頁數
    $num_pages = 1;
    // 若已經有翻頁，將頁數更新
    if (isset($_GET['page'])) {
        $num_pages = $_GET['page'];
}
    // 本頁開始記錄筆數 = (頁數-1)*每頁記錄筆數
    $startRow_records = ($num_pages -1) * $pageRow_records;
    // 未加限制顯示筆數的SQL敘述句
    $sql_query = "SELECT * FROM rˋeturn_order";
    // 加上限制顯示筆數的SQL敘述句，由本頁開始記錄筆數開始，每頁顯示預設筆數
    $sql_query_limit = $sql_query." LIMIT {$startRow_records},{$pageRow_records}";
    // 以加上限制顯示筆數的SQL敘述句查詢資料到 $result 中
    $result = $conn->query($sql_query_limit);
    // 以未加上限制顯示筆數的SQL敘述句查詢資料到 $all_result 中
    $all_result = $conn->query($sql_query);
    // 計算總筆數
    $total_records = $all_result->num_rows;
    // 計算總筆數=(總筆數/每筆頁數)後無條件進位。
    $total_pages = ceil($total_records/$pageRow_records);
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
    <p align="center">目前資料筆數：<?php echo $total_records;?>，<a href="add.php">新增退換貨資料</a>。</p>
    <table border="1" align="center">
        <!-- 表格開頭 -->
        <tr>
            <th>訂單編號</th>
            <th>姓名</th>
            <th>電話</th>
            <th>email</th>
            <th>地址</th>
            <th>退貨原因</th>
            <th>退貨日期</th>
            <th>功能</th>
        </tr>
        <!-- 資料內容 -->
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
    <table border="0" align="center">
        <tr>
            <?php if ($num_pages > 1) { //若不是第一頁則顯示 ?>
            <td><a href="data_page.php?page=1">第一頁</a></td>
            <td><a href="data_page.php?page=<?php echo $num_pages-1;?>">上一頁</a></td>
            <?php } ?>
            <?php if ($num_pages < $total_pages) {
        ?>
            <td><a href="data_page.php?page=<?php echo $num_pages+1;?>">下一頁</a></td>
            <td><a href="data_page.php?page=<?php echo $total_pages;?>">最後頁</a></td>
            <?php } ?>

        </tr>

    </table>
        <table border="0" align="center">
        <tr>
            <td>
                頁數：
                <?php 
                for($i=1;$i<=$total_pages;$i++){
                    if($i==$num_pages){
                        echo $i." ";
                    }else{
                        echo "<a href=\"data_pages.php?page={$i}\">{$i}</a> ";
                    }
                }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>